<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo',function()
{
    return 'Halo ini Aplikasi Laravel Pertama Saya'.
        'Laravel is Magical Framework';
});

Route::get('about',function()
{
    return '<h1>Hallo Saya Kims</h1>'
        .'Selamat datang di webapp saya<br>'
        .'Laravel,emang keren.';
});

Route::get('nama',function()
{
    return '<h1>Profil Hamba</h1>'
        .'Nama : Hilmi Fadhilah.';
});

Route::get('Alamat',function()
{
    return '<h1>Profil Hamba</h1>'
        .'Alamat : Dayeuhkolot.';
});

Route::get('Kelas',function()
{
    return '<h1>Profil Hamba</h1>'
        .'Kelas : XI RPL 1.';
});

Route::get('Hobi',function()
{
    return '<h1>Profil Hamba</h1>'
        .'Hobi : Futsal.';
});

Route::get('biodata/{nama}/{alamat}/{umur}/{hobi}',function($a,$b,$c,$d)
{

    return 'Ini biodata aku ' . $d .
           '<br> Nama saya ' .$a .
           '<br> Alamat saya ' .$b .
           '<br> Umur saya ' . $c;
});

// Route::get('name/{param?}', function($a = "KIMI "){
//     return 'Your name is ' . $a;
// )};

Route::get('pesan/{makan?}/{minum?}/{harga?}',function($a = null, $b = null,$c=null )
{
    $str = "Silakan Pesan Terlebih Dahulu";

    if (isset($a)) {
        $str = "Anda Memesan $a";
    }
     if (isset($b)) {
        $str .= " dan $b";
    }

    if (isset($c)) {
        $str .= " Dengan harga $c";

        if ($c >= 35000) {
            $str .= " Anda mendapatkan size Large";
            # code...
        }
        else if ($c >= 25000) {
                $str .= " Anda mendapatkan size Medium";
                # code...
            }
        else if ($c < 25000) {
                $str .= " Anda mendapatkan size Small";
                # code...
            }
    }

    return $str;
});

Route::get('datadiri/{Nama?}/{BB?}/{Umur?}', function($a = null, $b= null, $c= null)
{
   $imi = "Silakan Isi Data Terlebih Dahulu";

   if (isset($a)) {
        $imi = "Nama Anda  :$a";
       # code...
   }
     if (isset($b)) {
        $imi .= " Berat Badan :$b";

        if ($b >= 75 && $b <100) {
            $imi .= " Anda harus turun berat badan";
            # code...
        }
        else if ($b >= 65 && $b <75) {
                $imi .= " Berat badan anda ideal";
                # code...
            }
        else if ($b >= 50 && $b <65) {
                $imi .= " Naikan berat bdan anda";
                # code...
            }
        else if ($b < 50) {
                $imi .= " Anda kurang nutrisi";
                # code...
            }
    }
        if (isset($c)) {
        $imi .= " Umur :$c";

        if ($c >= 50 && $c <60) {
            $imi .= " Perwira";
            # code...
        }
        else if ($c >= 40    && $c <50) {
                $imi .= " Laksamana";
                # code...
            }
        else if ($c >= 30 && $c <40) {
                $imi .= " Jendral";
                # code...
            }
    }
    return $imi;
});





