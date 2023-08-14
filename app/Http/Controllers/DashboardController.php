<?php

namespace App\Http\Controllers;
use App\Models\RouterosAPI;
use App\Models\transaksi;
use App\Models\pemesanan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
    	$API = new RouterosAPI();
    	$API->debug('false');

    	if($API->connect($ip, $user, $pass)){
    		$address = $API ->comm('/ip/address/print');
            $hotspotuser = $API->comm('/ip/hotspot/user/print');
            $hotspotprofile = $API->comm('/ip/hotspot/user/profile/print');
            $resource = $API->comm('/system/resource/print');
    	}else{
           return redirect('/login') -> with('alert','Tidak Dapat Terhubung');
           
    	}

    	$data = [
    		'totalhotspotuser' => count($hotspotuser),
            'totalhotspotprofile' => count($hotspotprofile),
    		'address' => $address [0]['address'],
    		'network' => $address [0]['network'],
    		'interface' => $address [0]['interface'],
            'cpu' => $resource[0]['cpu-load'],
    	]; 

    // Total transaksi
        
        $transactions = transaksi::where('status',['Paid'])->get();
        $totalPrice = 0;

        foreach ($transactions as $transaction) {
            if ($transaction->User->username == auth()->user()->username) {
                $totalPrice += $transaction->price;
            }
           
        }

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

    	// dd($user);

    	return view('dashboard', $data)
        ->with('totalPrice', $totalPrice)
        ->with('total', $total);
    }

     public function cpu()
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug = false;

        if ($API->connect($ip, $user, $pass)) {

            $resource = $API->comm('/system/resource/print');

            $data = [
                'cpu' => $resource['0']['cpu-load'],
            ];

            return view('realtime.status', $data);
        } else {

            return view('failed');
        }
    }
}
