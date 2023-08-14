<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function(Blueprint $table){
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('profile');
            $table->string('limit');
            $table->String('bukti_bayar')->nullable();
            $table->bigInteger('price');
            $table->enum('status',['Unpaid','Paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
