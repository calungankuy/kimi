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

            }
        }
        public function loop2()
        {
            $data = [
                ['Nama'=>'Kimi', 'Agama'=>'Islam', 'Alamat'=>'Dayeuhkolot', 'Jemis_kelamin'=>'Laki - laki', 'Jabatan'=>'Manager', 'Jam_Kerja'=>'6'],
                ['Nama'=>'Firman', 'Agama'=>'Shinto', 'Alamat'=>'Cedok', 'Jenis_kelamin'=>'Laki - laki', 'Jabatan'=>'Sekretaris', 'Jam_Kerja'=>'5'],
                ['Nama'=>'Jarwo', 'Agama'=>'Kristen', 'Alamat'=>'Katapang', 'Jenis_kelamin'=>'Laki - laki', 'Jabatan'=>'Staff', 'Jam_Kerja'=>'4']
            ];
            foreach($data as $angsamc => $key ) {
                $gaji = 5000000;

                if ($key['Jabatan']== 'Manager') {
                    $gajinya = 5000000;
                    if ($key['Jam_Kerja']>=250) {
                        $bonusnya = $gaji*10/100;
                    }elseif ($key['Jam_Kerja']>=250) {
                        $bonusnya = $gaji*5/100;
                    }
                    else{
                        $bonusnya = 0;
                    }


                }
                $gajibersih=$gajinya=$bonusnya;
                    $potong=$gajibersih*2.5/100;
                    $totalnya=$gajibersih-$potong;
                echo 'Nama : ' .$key['Nama']. '<br>'.
                     'Agama : '.$key['Agama']. '<br>'.
                     'Alamat : '.$key['Alamat']. '<br>'.
                     'Jenis kelamin : '.$key['Jenis_kelamin']. '<br>'.
                     'Jabatan : '.$key['Jabatan']. '<br>'.
                     'Jam Kerja : '.$key['Jam_Kerja']. '<br>';
                    }

        }

}






