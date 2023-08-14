<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\RouterosAPI;
use App\Models\User;
use App\Models\pemesanan;

class MitraController extends Controller
{
      public function __construct(){
        $this->middleware('admin');
    }
    
     public function mitra(){
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug('false');

        if($API->connect($ip, $user, $pass)){

            $item = user::all();

            return view('mitra',['datausers' => $item]);

        } else {

            return redirect('failed');
        }
    }

// add  mitra
     public function addmitra(Request $request){
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterosAPI();
        $API->debug('false');

        if($API->connect($ip, $user, $pass)){

            // Simpan data ke database
            $validasi = $request->validate([
              'address' => 'required',
              'username'=> 'required',
              'password' =>'required',
              'level' => 'required'
            ]);

            $validasi['password'] = Hash::make($validasi['password']);
            
            User::create($validasi);

            return redirect('mitra')->with('success','Mitra berhasil ditambahkan');

        } else {

            return redirect('failed');
        }
    }

//Update
    public function ubah(Request $request, $id){

        $item = user::find($id);
        $item->address = $request->address;
        $item->username = $request->username;
        $item->level = $request->level;
        $item->update();

        return redirect('/mitra')->with('success','Data berhasil diubah');
    }

//delete
    public function deleteMitra($id){
        $item = user::find($id);
        $item->delete();

        return redirect('/mitra');
    }
}
