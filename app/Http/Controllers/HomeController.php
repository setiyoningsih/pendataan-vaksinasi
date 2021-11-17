<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendataan;
use Carbon\CarbonImmutable;

class HomeController extends Controller
{
    public function index(Request $request) {
        $pendataan = Pendataan::where('nama', 'like', '%' . $request->kata . '%')->get();

        $tanggal_sekarang = new CarbonImmutable();

        $anakStart = $tanggal_sekarang->subYears(10);
        $anakEnd =  $tanggal_sekarang->subYears(5);
        $anak = Pendataan::whereBetween('tanggal_lahir', [$anakStart, $anakEnd])->count();

        $remajaStart = $tanggal_sekarang->subYears(17);
        $remajaEnd = $tanggal_sekarang->subYears(12);
        $remaja = Pendataan::whereBetween('tanggal_lahir', [$remajaStart, $remajaEnd])->count();

        $dewasaStart = $tanggal_sekarang->subYears(45);
        $dewasaEnd = $tanggal_sekarang->subYears(18);
        $dewasa = Pendataan::whereBetween('tanggal_lahir', [$dewasaStart, $dewasaEnd])->count(); 

        $lansiaStart = $tanggal_sekarang->subYears(65);
        $lansiaEnd = $tanggal_sekarang->subYears(46);
        $lansia = Pendataan::query()
                ->whereYear('tanggal_lahir', '>=', $lansiaStart)
                ->whereYear('tanggal_lahir', '=', $lansiaEnd)
                ->count(); 

    	return view('home/landing_page', compact('pendataan', 'anak', 'remaja', 'dewasa', 'lansia'));
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
        $pendataan->is_admin = false;
        $pendataan->is_valid = false;
        $pendataan->sertifikat = $request->sertifikat;  //tambahi store
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
