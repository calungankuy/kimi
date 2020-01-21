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



