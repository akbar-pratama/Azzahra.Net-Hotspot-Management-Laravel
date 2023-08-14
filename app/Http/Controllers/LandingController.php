<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\transaksi;

class LandingController extends Controller
{
    public function index(){
    	
        return view('landing-page.index');

    }


    public function FormSosmed(){

        return view('landing-page.form-sosmed');

    }

    public function create(Request $request)
    {
    Session::put('previous_url', url()->previous());

    	if ($request->profile == "Social Media") {
    		if ($request->limit == "1d") {
    			$comment = '8000';
	    	}elseif($request->limit == "12h"){
	            $comment = '6000';     
	         }else{
	         	$comment = '4000';
	         } 

    	}else if ($request->profile == "Streaming"){
    		if ($request->limit == "1d") {
    			$comment = '9000';
	    	}elseif($request->limit == "12h"){
	            $comment = '7000';     
	         }else{
	         	$comment = '5000';
	         }
    	} else{
            if ($request->limit == "1d") {
                $comment = '10000';
            }elseif($request->limit == "12h"){
                $comment = '8000';     
             }else{
                $comment = '6000';
             }
        }          

            $name = $request->username;
            $password = $request->password;
            $paket = $request->profile;
            $durasi = $request->limit;
            $harga = $comment;           

			return view('landing-page.checkout')
            ->with("username",$name)
            ->with("password",$password)
            ->with("paket", $paket)
            ->with("durasi",$durasi)
            ->with("harga",$harga);
    }

    //Update

    public function bayar(Request $request){

        $data = transaksi::create($request->all());

        if ($request->hasFile('bukti_bayar')) {
            $request->file('bukti_bayar')->move('Upload/bukti_bayar/', $request->file('bukti_bayar')->getClientOriginalName());
                $data->bukti_bayar = $request->file('bukti_bayar')->getClientOriginalName();
                    $data->save();
        }

        // dd($request->all());

        return view('landing-page.invoice',compact('data'));
    }

    
    public function FormStreaming(){
    	
        return view('landing-page.form-streaming');

    }
    public function FormGame(){

        return view('landing-page.form-game');

    }

    public function checkout(){
    	
        return view('landing-page.checkout');

    }

    
    public function goBack(){
        // Mendapatkan URL sebelumnya dari session
        $previousUrl = Session::get('previous_url');

        // dd($previousUrl);

        // Mengarahkan pengguna kembali ke halaman sebelumnya
        return Redirect::to($previousUrl);
    }

    public function pdf($id){
        $data = transaksi::find($id);
        return view('landing-page.pdf',compact('data'));
    }

    // public function callback(Request $request){
    // 	$serverKey = config('midtrans.server_key');
    // 	$hashed = hash("sha521", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    // 	if ($hashed == $request->ignature_key) {
    // 		if ($request->transaction_status == 'capture') {
    // 			$data = transaksi::find($request->order_id);
    // 			$data->update(['status'=>'Paid']);
    // 		}
    // 	}
    // }
}
