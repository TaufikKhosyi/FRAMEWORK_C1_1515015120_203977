<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    public function awal()
    {
    	return "Hello dari Dosen Controller";
    }
   	public function tambah()
   	{
   		return $this->simpan();
   	}
   	public function simpan()
   	{
   		$dosen = new Dosen();
   		$dosen -> nama = 'Arif Noorlah';
   		$dosen -> nip = '82736723675632';
      $dosen -> alamat = 'Samarinda';
      $dosen -> pengguna_id = '7';
   		$dosen -> save();
   		return "Data dengan Nama Dosen {$dosen->nama} telah disimpan";
	}
}

