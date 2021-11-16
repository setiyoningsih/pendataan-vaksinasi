<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Pendataan;

class DataVaksinasiController extends Controller
{
    public function index() {
    	$vaksinasi = User::all();
    	
    	return view('data_vaksinasi/lihat_data', compact('vaksinasi'));
    }

    public function tampilTambahVaksinasi() {
    	$vaksinasi = User::all();
    	
    	return view('data_vaksinasi/tambah_data', compact('vaksinasi'));	
    }

	public function tambahVaksinasi(Request $request) {
		$request->validate([
			'nama' => ['required'],
			'nik' => ['required'],
			'tanggal_lahir' => ['required'],
			'rt' => ['required'],
			'rw' => ['required'],
			'sertifikat' => ['required'],
		]);

		$vaksinasi = new Pendataan();
		$vaksinasi->nama = $request->nama;
        $vaksinasi->nik = $request->nik;
        $vaksinasi->tanggal_lahir = $request->tanggal_lahir;
        $vaksinasi->rt = $request->rt;
        $vaksinasi->rw = $request->rw;
        if($vaksinasi->is_admin == true && $vaksinasi->is_valid == true) {
            $vaksinasi->sertifikat = $request->sertifikat;
        }
		$vaksinasi->save();

        return redirect('/admin/data-vaksinasi')->->with(['pesan' => 'Data berhasil ditambahkan']);
    }

    public function tampilEditVaksinasi($id) {
        $vaksinasi = Pendataan::find($id);

        return view('data_vaksinasi/edit_data', compact('vaksinasi'));
    } 

    public function editVaksinasi(Request $request, $id) {
        $request->validate([
            'nama' => ['required'],
            'nik' => ['required'],
            'tanggal_lahir' => ['required'],
            'rt' => ['required'],
            'rw' => ['required'],
            'sertifikat' => ['required'],
        ]);

        $vaksinasi = Pendataan::find($id);
        $vaksinasi->nama = $request->nama;
        $vaksinasi->nik = $request->nik;
        $vaksinasi->tanggal_lahir = $request->tanggal_lahir;
        $vaksinasi->rt = $request->rt;
        $vaksinasi->rw = $request->rw;
        if($vaksinasi->is_admin == true && $vaksinasi->is_valid == true) {
            $vaksinasi->sertifikat = $request->sertifikat;
        }
        $vaksinasi->save();

        return redirect('/admin/data-vaksinasi')->with(['pesan' => 'Data berhasil diedit']);
    }

    public function hapusVaksinasi($id) {
        $vaksinasi = Pendataan::find($id);
        if($vaksinasi) {
            $vaksinasi->delete();
        }

        return back();
    }
}
