<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'user_id', 'username', 'password','profile', 'limit','bukti_bayar','price','status'];

    public function User(){
        return $this->belongsTo('App\Models\User');
    } 

    public static function remove_unpaid(){
    	$data = transaksi::all();
    	foreach ($data as $item) {
    		if ($item->status == 'Unpaid') {
    			$created = strtotime($item->created_at)+(86400*7);
    			if ($created < time()) {
    				$item->delete();
    			}
    		}
    	}
    }
}
