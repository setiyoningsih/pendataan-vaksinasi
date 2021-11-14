<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    function index() {

    	return view('akun/lihat_akun');
    }

    function tampilTambahAkun() {

    	return view('akun/tambah_akun');
    }

    function tampilEditAkun() {

    	return view('akun/edit_akun');
    }
}
