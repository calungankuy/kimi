<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function halo()
    {
        return "Hallo mama saya dadang";
    }

    public function pertambahan($c=0 , $hilmi=0)
    {
        if(!$c && !$hilmi){
        return 'Silahkan masukan nomer pasienya terlebih dahulu';
        }
        if(isset($c)) {
                echo '<br>Bilangan pertama = '.$c;
            }
            if(isset($hilmi)) {
                echo '<br>Bilangan kedua = '.$hilmi;
            }
            $akhir = $c+$hilmi;
            return '<br>Hasil dari '.$c. ' + '. $hilmi. ' = '.$akhir;
    }
    public function Perkurangan($akheu=0 , $gow=0)
    {
         if(!$akheu && !$gow){
        return 'Silahkan masukan nomer pasienya terlebih dahulu';
        }
        if(isset($akheu)) {
                echo '<br>Bilangan pertama = '.$akheu;
            }
            if(isset($gow)) {
                echo '<br>Bilangan kedua = '.$gow;
            }
            $akhir = $akheu-$gow;
            return '<br>Hasil dari '.$akheu. ' - '. $gow. ' = '.$akhir;
    }
     public function Pembagian($d=0 , $aduh=0)
    {
        if(!$d && !$aduh){
        return 'Silahkan masukan nomer pasienya terlebih dahulu';
        }
        if(isset($d)) {
                echo '<br>Bilangan pertama = '.$d;
            }
            if(isset($aduh)) {
                echo '<br>Bilangan kedua = '.$aduh;
            }
            $akhir = $d / $aduh;
            return '<br>Hasil dari '.$d. ' / '. $aduh. ' = '.$akhir;
    }
    public function Perkalian($kimi=0 , $jay=0)
    {
        if(!$c && !$hilmi){
        return 'Silahkan masukan nomer pasienya terlebih dahulu';
        }
        if(isset($c)) {
                echo '<br>Bilangan pertama = '.$c;
            }
            if(isset($hilmi)) {
                echo '<br>Bilangan kedua = '.$hilmi;
            }
            $akhir = $c+$hilmi;
            return '<br>Hasil dari '.$c. ' + '. $hilmi. ' = '.$akhir;
    }
    public function loop()
    {
        $data = [
            ['Nama'=>'Alex',  'Kelas'=>'XI RPL 1', 'jajan'=>70000],
            ['Nama'=>'Memet', 'Kelas'=>'XI RPL 1', 'jajan'=>45000],
            ['Nama'=>'Restu', 'Kelas'=>'XI RPL 1', 'jajan'=>25000],
            ['Nama'=>'David', 'Kelas'=>'XI RPL 1', 'jajan'=>10000]
        ];

        foreach($data as $val => $key)
        {
           if ($key['jajan']>=50000) {
               $tabungan = "25%";
               $tabung = $key['jajan']* 0.25;
               $sisa = $key['jajan'] - $tabung;
           }
           elseif($key['jajan']>=25000){
               $tabungan = "15%";
               $tabung = $key['jajan']*15/100;
               $sisa = $key['jajan'] - $tabung;
           }
           elseif ($key['jajan']>=10000) {
               $tabungan = "10 %";
               $tabung = $key['jajan']*10/100;
               $sisa = $key['jajan'] - $tabung;
           }
            echo '<br>'.'Nama : ' .$key['Nama'].'<br>'.
                'Kelas : ' .$key['Kelas'].'<br>'.
                'Uang Jajan : Rp.'. $key['jajan'].'<br>'.
                'Uang Tabungan : '.$tabung. '<br>'.
                'Sisa : Rp.'. $sisa.'<hr>';

        public function loop2()
        {
            $data = [
                ['Nama'=>'Kimi', 'Agama'=>'Islam', 'Alamat'=>'Dayeuhkolot', 'Jemis Kelamin'=>'Laki - laki', 'Jabatan'=>'Manager', 'Jam Kerja'=>'6'],
                ['Nama'=>'Firman', 'Agama'=>'Shinto', 'Alamat'=>'Cedok', 'Jenis Kelamin'=>'Laki - laki', 'Jabatan'=>'Sekretaris', 'Jam Kerja'=>'5'],
                ['Nama'=>'Jarwo', 'Agama'=>"Kristen", 'Alamat'=>'Katapang', 'Jenis Kelamin'=>'Laki - laki', 'Jabatan'=>'Staff', 'Jam Kerja'=>'4'];
            ]
        }
        };
    }

}






