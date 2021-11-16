<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Pendataan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    function index () {
    	$data = Pendataan::all();
    	$jumlah = Pendataan::where('rt', 'rw')->count();

    	$anakStart = Carbon::createFromFormat('Y-m-d', '2011-01-01');
    	$anakEnd = Carbon::createFromFormat('Y-m-d', '2016-01-01');
    	$anak = Pendataan::whereBetween('tanggal_lahir', [$anakStart, $anakEnd])->count();

    	$remajaStart = Carbon::createFromFormat('Y-m-d', '2004-01-01');
    	$remajaEnd = Carbon::createFromFormat('Y-m-d', '2009-01-01');
    	$remaja = Pendataan::whereBetween('tanggal_lahir', [$remajaStart, $remajaEnd])->count();

		$dewasaStart = Carbon::createFromFormat('Y-m-d', '1976-01-01');
    	$dewasaEnd = Carbon::createFromFormat('Y-m-d', '2003-01-01');
    	$dewasa = Pendataan::whereBetween('tanggal_lahir', [$dewasaStart, $dewasaEnd])->count(); 

    	$lansiaStart = Carbon::createFromFormat('Y-m-d', '1975-01-01');
    	$lansiaEnd = Carbon::createFromFormat('Y-m-d', '1956-01-01');
    	$lansia = Pendataan::query()
    			->whereYear('tanggal_lahir', '=', $lansiaStart)
    			->whereYear('tanggal_lahir', '>=', $lansiaEnd)
    			->count();   	
		
    	return view('admin/dashboard', compact('data', 'jumlah', 'anak', 'remaja', 'dewasa', 'lansia'));
    }

    function dataMasuk() {
    	$pendataan = Pendataan::all();

    	return view('admin/data_masuk', compact('pendataan'));
    }
}
