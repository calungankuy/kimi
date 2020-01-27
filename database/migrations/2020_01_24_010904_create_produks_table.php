<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Nama_Barang');
            $table->date('Tanggal_Pembelian');
            $table->string('Jenis_Barang');
            $table->string('Kode_Barang')->unique();
            $table->string('Tenaga_Penjual');
            $table->string('Kota_Tujuan');
            $table->integer('Jumlah_Barang');
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
        Schema::dropIfExists('produks');
    }
}
