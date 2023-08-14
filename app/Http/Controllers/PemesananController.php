<?php

namespace App\Http\Controllers;
use App\Models\RouterosAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\pemesanan;
use App\Models\User;

class PemesananController extends Controller
{
    public function pemesanan(){
      $item =pemesanan::all();
         
        return view('pemesanan',['pemesanan'=>$item]);
    }

    public function PesanVoucher(Request $request){

      // Simpan data ke database

        if ($request->profile == 'Streaming') {
          if ($request->limit == '1d'){
            $harga = '6000';
          }elseif($request->limit == '6h'){
            $harga = '4000';
          }else{
            $harga = '5000';
          }
        }elseif ($request->profile == 'Social Media'){
          if ($request->limit == '1d'){
            $harga = '5000';
          }elseif($request->limit == '6h'){
            $harga = '3000';
          }else{
            $harga = '4000';
          }
        }else{
          if ($request->limit == '1d'){
            $harga = '7000';
          }elseif($request->limit == '6h'){
            $harga = '5000';
          }else{
            $harga = '6000';
          }
        }

        $totalPrice = $request->jumlah * $harga;

        $data= new pemesanan;
        $data->user_id = $request->user_id;
        $data->profile = $request->profile;
        $data->limit = $request->limit;
        $data->total = $totalPrice;
        $data->jumlah = $request->jumlah;
        $data->save();
       
        return redirect('/pemesanan')->with('success','Pesanan berhasil dibuat');
    }

    public function GeneratePemesanan($id){

      //Ambil data dari database
        $data = pemesanan::find($id);
        $data->update(['status'=>'Selesai']);
        $item = user::all();


        $mitra = $data->getOriginal('user_id');
        $profile = $data->getOriginal('profile');
        $limit = $data->getOriginal('limit');
        $jumlah = $data->getOriginal('jumlah');

      //Buat data pada mikrotik

        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug('false');

        if ($API->connect($ip, $user, $pass)){


            for ($id=0; $id < $jumlah ; $id++) { 
               
            $API->comm('/ip/hotspot/user/add', array(
              'name' => Str::random(4),
              'password' => Str::random(4),
              'profile' => $profile,
              'limit-uptime' => $limit,
              'comment' => $mitra,
              'disabled' => 'true',
            ));

          }

                  // $data = [
                  //   'add' => $add
                  // ];

                  // dd($data);

          return redirect('/pemesanan')->with('success','Generate Voucher berhasil');

          }else{
            return redirect('failed');
        }
    }

    //Update
    public function UploadGambar(Request $request, $id){

        $data = pemesanan::find($id);
        if ($request->hasFile('bukti')) {
          $request->file('bukti')->move('Upload/bukti_bayar/', $request->file('bukti')->getClientOriginalName());
              $data->bukti_bayar = $request->file('bukti')->getClientOriginalName();
              $data->Update();
        }

        return redirect('/pemesanan')->with('success','Data berhasil diupload');
    }

      public function destroy($id){
        $item = pemesanan::find($id);
        $file = public_path('Upload/bukti_bayar/').$item->bukti_bayar;
            if (file_exists($file)){
                 @unlink($file);
            }
        $item->delete();
        return redirect('/pemesanan');
    }

     public function savePDF($tglawal,$tglakhir){

        $item = pemesanan::whereBetween('created_at',[$tglawal,$tglakhir])->get();
        $transaksiMitra = pemesanan::where('status',['Selesai'])->get();
        $total = 0;

        foreach ($transaksiMitra as $transaksi) {
            if (Auth::check() && Auth::user()->level == 'admin') {
                $total += $transaksi->total;
            }
            elseif ($transaksi->User->username == auth()->user()->username) {
                $total += $transaksi->total;
            }
           
        }

        return view('pemesananPDF',['PDFPemesanan'=>$item], ['total'=>$total]);
        //
    }
}
