<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\User;
use App\Models\RouterosAPI;

class TransaksiController extends Controller
{
    
    public function transaksi(){
        $item =transaksi::all();
        return view('transaksi', ['datatransaksi' => $item]);
    }

    public function destroy($id){
        $item = transaksi::find($id);
        $file = public_path('Upload/bukti_bayar/').$item->bukti_bayar;
            if (file_exists($file)){
                 @unlink($file);
            }
        $item->delete();

        return redirect('/transaksi');
    }

    public function cetakPDF($tglawal,$tglakhir){

        $item = transaksi::whereBetween('created_at',[$tglawal,$tglakhir])->get();
        $item = transaksi::where('status',['Paid'])->get();
        $totalPrice = 0;

        foreach ($item as $transaction) {
            if ($transaction->User->username == auth()->user()->username) {
                $totalPrice += $transaction->price;
            }
        }

        return view('transaksiPDF',['PDFTransaksi'=>$item], ['totalPrice' => $totalPrice]);
        //
    }

    public function ambilRouter($id){

    // ambil data transaksi
        $item = transaksi::find($id);

            $username= $item->getOriginal('username');
            $password= $item->getOriginal('password');
            $profile= $item->getOriginal('profile');
            $limit= $item->getOriginal('limit');
            $price= $item->getOriginal('price');

    //kirim data ke router
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug('false');

        if ($API->connect($ip, $user, $pass)){ 

          $API->comm('/ip/hotspot/user/add', array(
                'name' => $username,
                'password' => $password,
                'profile' => $profile,
                'limit-uptime' => $limit,
                'comment' => $price,
            ));

         // dd($data);

            return redirect('/transaksi')->with('success','Voucher berhasil dibuat');
        }else{
            return redirect('failed');
        }       
    }
}

