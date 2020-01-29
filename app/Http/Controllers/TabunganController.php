<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    //
    public function index()
    {
        $tabungam = \App\Tabungan::all();
        return $tabungam;
    }
    public function show($id)
    {
        $tabungan = \App\Tabungan::find($id);
        return $tabungan;
    }
    public function store($nis,$nama,$kelas,$jml)
    {
        $tabungan = new Tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;

    }
    public function edit($id=NULL,$nis=NULL,$kims=NULL,$jay=NULL,$ang=NULL){
        $tabungan = Tabungan::find($id);
        $tabungam->nis = $nis;
        $tabungan->nama = $kims;
        $tabungan->kelas = $jay;
        $tabungan->jml = $ang;
        $tabungan->save();
        return $tabungan;
    }
    public function delete($id){
        $uka = Tabungan::find($id);
        $uka = delete();
    }
}
