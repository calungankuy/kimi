<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
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
        ['Nama'=>'Hilmi Fadhilah', 'Nis'=>'001234', 'Jenis_Kelamin'=>'Laki_laki','Alamat'=>'Dayeuhkolot', 'tgl_lahir'=>'2006-12-12', 'Umur'=>17],
        ['Nama'=>'Brian', 'Nis'=>'001235', 'Jenis_Kelamin'=>'Laki_laki','Alamat'=>'Dayeuhkolot', 'tgl_lahir'=>'2007-11-08', 'Umur'=>17],
        ['Nama'=>'Ferdi', 'Nis'=>'001236', 'Jenis_Kelamin'=>'Laki_laki','Alamat'=>'Dayeuhkolot', 'tgl_lahir'=>'2007-11-08', 'Umur'=>17],
        ['Nama'=>'Alex', 'Nis'=>'001237', 'Jenis_Kelamin'=>'Laki_laki','Alamat'=>'Dayeuhkolot', 'tgl_lahir'=>'2007-11-08', 'Umur'=>17],
        ['Nama'=>'Kevin', 'Nis'=>'001238', 'Jenis_Kelamin'=>'Laki_laki','Alamat'=>'Dayeuhkolot', 'tgl_lahir'=>'2007-11-08', 'Umur'=>17]




        ];
        DB::table('siswa')->insert($posts);
    }
}
