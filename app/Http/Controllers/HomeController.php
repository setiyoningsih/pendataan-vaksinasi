<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendataan;

class HomeController extends Controller
{
    public function index() {

    	return view('home/landing_page');
    }

    public function tampilPendataan() {
    	$pendataan = Pendataan::all();

    	return view('home/pendataan', compact('pendataan'));
    }

    public function tambahPendataan(Request $request) {
    	$request->validate([
    		'nama' => ['required'],
            'nik' => ['required'],
            'tanggal_lahir' => ['required'],
    		'rt' => ['required'], 
    		'rw' => ['required'],
    		'sertifikat' => ['required', 'mimetypes:image/*']
    	]);

    	$pendataan = new Pendataan();
    	$pendataan->nama = $request->nama;
        $pendataan->nik = $request->nik;
        $pendataan->tanggal_lahir = $request->tanggal_lahir;
    	$pendataan->rt = $request->rt;
    	$pendataan->rw = $request->rw;
    	$pendataan->sertifikat = $request->sertifikat;
    	$pendataan->save();

    	return back()->with(['pesan' => 'Data berhasil dimasukkan']);
    }

    public function tentangVaksin() {

    	return view('home/tentang_vaksin');
    }

    public function petunjuk() {

    	return view('home/petunjuk');
    }
}
