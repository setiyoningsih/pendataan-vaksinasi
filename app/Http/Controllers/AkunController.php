<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AkunController extends Controller
{
    public function index(Request $request) {
    	$user = User::all();
    	$user = User::where('name', 'like', '%' . $request->kata . '%')
    		->orWhere('email', 'like', '%' . $request->kata . '%')->get();

    	return view('akun/lihat_akun', compact('user'));
    }

    public function tampilTambahAkun() {
    	$user = User::all();

    	return view('akun/tambah_akun', compact('user'));
    }

    public function tambahAkun(Request $request) {
    	$request->validate([
    		'name' => ['required'],
    		'email'=> ['required'],
    		'password' => ['required'],
    	]);

    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();

    	return redirect('/admin/akun');
    }

    public function tampilEditAkun($id) {
    	$user = User::find($id);

    	return view('akun/edit_akun', compact('user'));
    }

    public function editAkun(Request $request, $id) {
    	$request->validate([
    		'name' => ['required'],
    		'email' => ['required'],
    		'password' => ['required'],
    	]);

    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();

    	return redirect('/admin/akun');
    }

  
    public function hapusAkun($id) {
    	$user = User::find($id);
    	if($user) {
    		$user->delete();
    	}

    	return back();
    }
}
