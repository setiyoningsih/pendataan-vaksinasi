<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Pendataan;
use\App\Models\User;
use Carbon\CarbonImmutable;
use DB;

class DashboardController extends Controller
{
    public function index () {
        $data = DB::table('pendataan')->select('rt', 'rw', DB::raw('count(*) as jumlah'))->groupBy('rw', 'rt')->get();

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
		
    	return view('admin/dashboard', compact('data', 'anak', 'remaja', 'dewasa', 'lansia'));
    }

    public function dataMasuk() {
    	$pendataan = Pendataan::all();

    	return view('admin/data_masuk', compact('pendataan'));
    }

    // public function dataValid($id) {
    //     $pendataan = Pendataan::find($id);

    //     return view('admin/data_masuk', compact('pendataan'));
    // }

    public function isValid($id) {
        $valid = Pendataan::find($id);
        $valid->is_valid = true;
        $valid->save();

        return redirect('/admin/data-vaksinasi');
    }
}

