<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
    	return view('mahasiswa.awal',['data'=>Mahasiswa::all()]);
    }

   	public function tambah()
   	{
   		return view('mahasiswa.tambah');
   	}

   	public function simpan(Request $input)
   	{
   		$mahasiswa = new Mahasiswa;
      $mahasiswa->nama = $input->nama;
      $mahasiswa->nim = $input->nim;
      $mahasiswa->alamat = $input->alamat;
      $mahasiswa->pengguna_id = $input->pengguna_id;
      $informasi = $mahasiswa->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
      return redirect ('mahasiswa')->with(['informasi'=>$informasi]);
	}

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
    }

    public function lihat($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }

    public function update($id, Request $input){
      $mahasiswa = Mahasiswa::find($id);
      $mahasiswa->nama = $input->nama;
      $mahasiswa->nim = $input->nim;
      $mahasiswa->alamat = $input->alamat;
      $mahasiswa->pengguna_id = $input->pengguna_id;
      $informasi = $mahasiswa->save() ? 'Berhasil Update data' : 'Gagal Update data';
      return redirect ('mahasiswa')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $mahasiswa = Mahasiswa::find($id);
        $informasi = $mahasiswa->delete()?'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    }
}

