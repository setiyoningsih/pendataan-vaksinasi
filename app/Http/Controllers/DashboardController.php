<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Pendataan;

class DashboardController extends Controller
{
    function index () {
    	$data = Pendataan::all();

    	return view('admin/dashboard', compact('data'));
    }

    function dataMasuk() {
    	$pendataan = Pendataan::all();

    	return view('admin/data_masuk', compact('pendataan'));
    }
}
