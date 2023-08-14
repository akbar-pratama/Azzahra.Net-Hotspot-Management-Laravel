<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RouterosAPI;

class SettingController extends Controller
{
    public function setting(){
    	$ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
    	$API = new RouterosAPI();
    	$API->debug('false');

    	if($API->connect($ip, $user, $pass)){ 

            $data = [
            	'user' => $user,
            ];  
            // dd($data);
            return view('setting', $data);

        } else {

            return redirect('failed');
        }
    }
}
