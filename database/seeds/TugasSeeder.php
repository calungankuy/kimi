<?php

use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
        ['Nama_Pembeli'=>'Hilmi Fadhilah', 'Jenis_Mobil'=>'Avanza', 'Tipe_Mobil'=>'Manual','Tahun_Buat'=>'2000-09-08', 'warna_mobil'=>'Merah','Tempat_Dibuat'=>'Bandung', 'Nama_Showroom'=>'PT ABAADI JAYA'],
        ['Nama_Pembeli'=>'Brian', 'Jenis_Mobil'=>'Kijang', 'Tipe_Mobil'=>'MAnual','Tahun_Buat'=>'2000-02-04', 'warna_mobil'=>'Kunimg', 'Tempat_Dibuat'=>'Bandung','Nama_Showroom'=>'PT ABAADI JAYA'],
        ['Nama_Pembeli'=>'Ferdi', 'Jenis_Mobil'=>'Datsun', 'Tipe_Mobil'=>'Matic','Tahun_Buat'=>'2000-02-05', 'warna_mobil'=>'Hijau', 'Nama_Showroom'=>'PT ABAADI JAYA'],
        ['Nama_Pembeli'=>'Alex', 'Jenis_Mobil'=>'Agya', 'Tipe_Mobil'=>'Matic','Tahun_Buat'=>'2000-02-06', 'warna_mobil'=>'Abu', 'Tempat_Dibuat'=>'Bandung','Nama_Showroom'=>'PT ABAADI JAYA'],
        ['Nama_Pembeli'=>'Kevin', 'Jenis_Mobil'=>'Fortuner', 'Tipe_Mobil'=>'Matic','Tahun_Buat'=>'2000-02-07', 'warna_mobil'=>'Coklat', 'Tempat_Dibuat'=>'Bandung','Nama_Showroom'=>'PT ABAADI JAYA']
        ];
        DB::table('tugas')->insert($posts);

    }
}
