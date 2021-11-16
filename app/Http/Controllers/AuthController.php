<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function index() {

    	return view('admin/login');
    }

    public function login(Request $request) {
    	$request->validate([
    		'name' => 'required',
    		'password' => 'required'
    	]);

    	$login = ['name' => $request->name, 'password' => $request->password];
    	$login = Auth::attempt($login);
    	if($login) {
    		return redirect('/admin/dashboard');
    	}else {
    		return back()->withInput()->withErrors('Nama atau Password Anda Salah!');
    	}
    }

    public function logout() {
    	Auth::logout();
    	return redirect('login');
    }
}
