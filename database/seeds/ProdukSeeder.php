<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kims = [
            ['Nama_Barang'=>'hp', 'Tanggal_Pembelian'=>'2020-01-01', 'Jenis_Barang'=>'Elektronik', 'Kode_Barang'=>'12345', 'Tenaga_Penjual'=>'Kims', 'Kota_Tujuan'=>'Cilacap Selow', 'Jumlah_Barang'=>1 ],
        ];
            DB::table('produks')->insert($kims);
    }
}
