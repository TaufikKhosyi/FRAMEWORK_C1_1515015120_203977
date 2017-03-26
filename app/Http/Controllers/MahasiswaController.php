<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari Mahasiswa Controller";
    }
   	public function tambah()
   	{
   		return $this->simpan();
   	}
   	public function simpan()
   	{
   		$mahasiswa = new Mahasiswa();
   		$mahasiswa -> nama = 'Taufikurrahman Khosyi';
   		$mahasiswa -> nim = '1515015120';
      $mahasiswa -> alamat = 'Tanah Grogot';
      $mahasiswa -> pengguna_id = '8';
   		$mahasiswa -> save();
   		return "Data dengan nama mahasiswa {$mahasiswa->nama} telah disimpan";
	}
}

