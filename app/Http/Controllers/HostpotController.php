<?php

namespace App\Http\Controllers;
use App\Models\RouterosAPI;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class HostpotController extends Controller
{

    public function voucher(){
    	$ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
    	$API = new RouterosAPI();
    	$API->debug('false');

    	if($API->connect($ip, $user, $pass)){ 
    	
        $hotspotuser = $API->comm('/ip/hotspot/user/print');
        $profile = $API->comm('/ip/hotspot/user/profile/print');

        //User berdasrkan ID
            $item = user::all();

            foreach ($item as $item1) {
                if ($item1->username == auth()->user()->username) {
                    $item1->id;
             
                    $data = [
                        'hotspotuser' => $hotspotuser,
                        'profile' => $profile,
                        'item1' => $item1->id,
                    ];
                }
                
            }
           
            return view('voucher', $data, ['datausers' => $item]);

        } else {

            return redirect('failed');
        }
    }


    //add voucher

    public function addvoucher(Request $request){
    	$ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
    	$API = new RouterosAPI();
    	$API->debug('false');

    	if ($API->connect($ip, $user, $pass)){

        //harga
            if ($request['profile'] == 'Streaming') {
                if ($request['timelimit'] == '1d'){
                    $comment = '6000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '4000';
                }else{
                    $comment = '5000';
                }
            }elseif ($request['profile'] == 'Social Media'){
                if ($request['timelimit'] == '1d'){
                    $comment = '5000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '3000';
                }else{
                    $comment = '4000';
                }
            }else{
                 if ($request['timelimit'] == '1d'){
                    $comment = '7000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '5000';
                }else{
                    $comment = '6000';
                }
            }

         //User berdasrkan ID
            $item = user::all();
            
            foreach ($item as $item1) {
                if ($item1->username == auth()->user()->username) {
                    $item1->id;
              

    	//timelimit
    		if ($request['timelimit'] == '') {
    			$timelimit = '0';
    		}else{
    			$timelimit = $request['timelimit'];
    		}

    		$API->comm('/ip/hotspot/user/add', array(
        		'name' => $request['user'],
        		'password' => $request['password'],
        		'profile' => $request['profile'],
        		'limit-uptime' => $timelimit,
                'comment' => $item1->id,
                'disabled' => $request['disabled'],
    		));

                 }
               
            }

          $data = [
            // 'add' => $add,
            // 'harga' => $comment
          ];

          // dd($data);

    		return redirect('/hotspot/voucher')->with('success','Voucher berhasil dibuat');

    	}else{
    		return redirect('failed');
    	}
    }


// Generate Voucher

    public function generatevoucher(Request $request){
            $ip = session()->get('ip');
            $user = session()->get('user');
            $pass = session()->get('pass');
            $API = new RouterosAPI();
            $API->debug('false');

            if ($API->connect($ip, $user, $pass)){

            //harga
             if ($request['profile'] == 'Streaming') {
                if ($request['timelimit'] == '1d'){
                    $comment = '6000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '4000';
                }else{
                    $comment = '5000';
                }
            }elseif ($request['profile'] == 'Social Media'){
                if ($request['timelimit'] == '1d'){
                    $comment = '5000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '3000';
                }else{
                    $comment = '4000';
                }
            }else{
                 if ($request['timelimit'] == '1d'){
                    $comment = '7000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '5000';
                }else{
                    $comment = '6000';
                }
            }


            //timelimit
                if ($request['timelimit'] == '') {
                    $timelimit = '0';
                }else{
                    $timelimit = $request['timelimit'];
                }

            //User berdasrkan ID
                $item = user::all();
                
                foreach ($item as $item1) {
                    if ($item1->username == auth()->user()->username) {
                    $item1->id;

                for ($id=0; $id < $request['jum'] ; $id++) { 
               
                $API->comm('/ip/hotspot/user/add', array(
                    'name' => Str::random(4),
                    'password' => Str::random(4),
                    'profile' => $request['profile'],
                    'limit-uptime' => $timelimit,
                    'comment' => $item1->id,
                    'disabled' => $request['disabled'],
                    ));
                  }
               }
           }

                  // $data = [
                  //   'add' => $add
                  // ];

                  // dd($data);

                return redirect('/hotspot/voucher')->with('success','Generate Voucher berhasil');

            }else{
                return redirect('failed');
            }
        }

// Update voucher

   public function updatevoucher(Request $request)
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug = false;

        if($API->connect($ip, $user, $pass)){

             //harga
             if ($request['profile'] == 'Streaming') {
                if ($request['timelimit'] == '1d'){
                    $comment = '6000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '4000';
                }else{
                    $comment = '5000';
                }
            }elseif ($request['profile'] == 'Social Media'){
                if ($request['timelimit'] == '1d'){
                    $comment = '5000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '3000';
                }else{
                    $comment = '4000';
                }
            }else{
                 if ($request['timelimit'] == '1d'){
                    $comment = '7000';
                }elseif($request['timelimit'] == '6h'){
                    $comment = '5000';
                }else{
                    $comment = '6000';
                }
            }

             //User berdasrkan ID
                $item = user::all();
                
                foreach ($item as $item1) {
                    if ($item1->username == auth()->user()->username) {
                    $item1->id;

            $API->comm("/ip/hotspot/user/set", [
                ".id" => $request['id'],
                'name' => $request['user'],
                'password' => $request['password'],
                'profile' => $request['profile'],
                'limit-uptime' => $request['timelimit'],
                'disabled' => $request['disabled'] == '' ? $request['disabled'] : $request['disabled'],
                'comment' => $item1->id,
            ]);
        }
    }

          // $data = [
          //   'update' => $update
          // ];

          // dd($data);

            return redirect('/hotspot/voucher')->with('success','Voucher berhasil diubah');

        }else{

            return redirect('failed');
        }
    }

   //delete voucher

	public function deletevoucher($id){
		$ip = session()->get('ip');
		$user = session()->get('user');
		$pass = session()->get('pass');
		$API = new RouterosAPI();
		$API->debug = false;

		if ($API->connect($ip, $user, $pass)) {

			$API->comm('/ip/hotspot/user/remove', [
				'.id' => '*' . $id,
			]);

			
			return redirect('/hotspot/voucher');
		} else {

			return redirect('failed');
		}
	}


    //Print Voucher

    public function printvoucher($id){
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug('false');

        if($API->connect($ip, $user, $pass)){

            $getuser = $API->comm('/ip/hotspot/user/print', array(
                "?.id" => '*' . $id,
                ));
            
            $profile = $API->comm('/ip/hotspot/user/profile/print');
                $data = [
                    'user' => $getuser[0],
                    'profile' => $profile,
                ];
                // dd($data);
                return view('PrintVoucher', $data);

            } else {

                return redirect('failed');
            }
        }


    // Simpan data Voucher Transaksi
        
    public function save(Request $request){

        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug('false');

        if($API->connect($ip, $user, $pass)){

        // Status
            if ($request['disabled'] == 'true') {
                $disabled = 'false';
            }

            $API->comm("/ip/hotspot/user/set", [
                ".id" => $request['id'],
                'disabled' => $disabled,
            ]);

            // Simpan data ke database
            // $request->request->add(['status'=>'Paid']);
            $data = new transaksi;
            $data->user_id = $request->user_id;
            $data->username = $request->user;
            $data->password = $request->password;
            $data->profile = $request->profile;
            $data->limit = $request->timelimit;
            $data->bukti_bayar = $request->bukti_bayar;
            $data->price = $request->comment;
            $data->status = 'Paid';
            $data->save();

           return redirect('/hotspot/voucher')->with('success','Voucher berhasil disimpan');

        } else {

            return redirect('failed');
        }
    }


 // data user profile

    public function profile(){
    	$ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
    	$API = new RouterosAPI();
    	$API->debug('false');

    	if($API->connect($ip, $user, $pass)){
    	
            $hotspotprofile = $API->comm('/ip/hotspot/user/profile/print');

            $data = [
                'hotspotprofile' => $hotspotprofile,
               
            ];
            // dd($data);
            return view('profil', $data);

        } else {

            return redirect('failed');
        }
    }


    //add profile

    public function addprofile(Request $request){

    	$ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
    	$API = new RouterosAPI();
    	$API->debug('false');

    	if ($API->connect($ip, $user, $pass)){
    		
        $API->comm('/ip/hotspot/user/profile/add', array(
    		'name' => $request['name'],
    		'shared-users' => $request['sharedusers'],
    		'rate-limit' => $request['ratelimit'],

    		));

          // $data = [
          //   'add' => $add
          // ];

          // dd($data);

    		return redirect('/hotspot/profile')->with('success','Profile voucher berhasil dibuat');

    	}else{
    		return redirect('failed');
    	}
    }

// Update profile

   public function updateprofile(Request $request)
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug = false;

        if($API->connect($ip, $user, $pass)){

        $API->comm("/ip/hotspot/user/profile/set", [

                ".id" => $request['id'],
                'name' => $request['name'],
                'shared-users' => $request['sharedusers'],
                'rate-limit' => $request['ratelimit'],
            ]);

          // $data = [
          //   'update' => $update
          // ];

          // dd($data);

            return redirect('/hotspot/profile')->with('success','Profile voucher berhasil diubah');

        }else{

            return redirect('failed');
        }
    }

    //delete Profile

	public function deleteprofile($id){
		$ip = session()->get('ip');
		$user = session()->get('user');
		$pass = session()->get('pass');
		$API = new RouterosAPI();
		$API->debug = false;

		if ($API->connect($ip, $user, $pass)) {

			$API->comm('/ip/hotspot/user/profile/remove', [
				'.id' => '*' . $id
			]);
			
			return redirect('/hotspot/profile');
		} else {

			return redirect('failed');
		}
	}


    //users active

    public function active(){
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug = false;

        if ($API->connect($ip, $user, $pass)) {

    	    $active = $API->comm('/ip/hotspot/active/print');

            $data = [
                // 'totalhotspotactive' => count($hotspotactive),
                'hotspotactive' => $active,
                // 'time' => $active['session-time-left'],
            ];

            // dd($data);
            
            return view('active', $data);

        } else {

            return redirect('failed');
        }
    }


//Scheduler Voucher

    public function scheduler(){
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug = false;

        if ($API->connect($ip, $user, $pass)) {

            $scheduler = $API->comm('/system/scheduler/print');

            $data = [
                // 'totalhotspotactive' => count($hotspotactive),
                'scheduler' => $scheduler,
                // 'time' => $active['session-time-left'],
            ];

            // dd($data);
            
            return view('scheduler', $data);

        } else {

            return redirect('failed');
        }
    }


    public function time(){
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug = false;

        if ($API->connect($ip, $user, $pass)) {

            $active = $API->comm('/ip/hotspot/active/print');

            $data = [
                'id' => $active ['']['.id'],
                'time' => $active['']['session-time-left'],
            ];

            // dd($data);
            
            return view('realtime.time', $data);

        } else {

            return redirect('failed');
        }
    }

}