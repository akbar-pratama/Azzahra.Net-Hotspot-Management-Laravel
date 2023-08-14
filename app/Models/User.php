<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'users';
    protected $fillable = [
        'address', 
        'username', 
        'password',
        'level',
    ];

    public function pemesanan(){
        return $this->hasMany('App\Models\pemesanan');
    }

    public function transaksi(){
        return $this->hasMany('App\Models\transaksi');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
}
