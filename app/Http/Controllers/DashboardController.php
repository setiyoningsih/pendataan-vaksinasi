<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index () {

    	return view('admin/dashboard');
    }

    function dataMasuk() {

    	return view('admin/data_masuk');
    }

    function dataVaksinasi() {

    	return view('admin/data_vaksinasi');
    }
}
