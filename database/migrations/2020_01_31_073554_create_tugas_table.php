<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama_Pembeli')->unique();
            $table->string('Jenis_Mobil');
            $table->string('Tipe_Mobil');
            $table->integer('Tahun_Buat');
            $table->string('Warna_Mobil');
            $table->string('Tempat_Dibuat');
            $table->string('Nama_Showroom');
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
        Schema::dropIfExists('tugas');
    }
}
