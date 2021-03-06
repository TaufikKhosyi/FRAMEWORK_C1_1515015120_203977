<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
use App\Pengguna;

class DosenController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal()
    {
      $semuaDosen = dosen::all();
      return view('dosen.awal', compact('semuaDosen'));
    //	return view('dosen.awal',['data'=>Dosen::all()]);
    }

   	public function tambah()
   	{
   		return view('dosen.tambah');
   	}

   	public function simpan(Request $input)
   	{
   	  	$pengguna = new pengguna($input->only('username','password'));
        if($pengguna->save()){
            $dosen = new dosen();
            $dosen->nama = $input->nama;
            $dosen->nip = $input->nip;
            $dosen->alamat = $input->alamat;
            if ($pengguna->dosen()->save($dosen)){
                $this->informasi = 'Berhasil Simpan Data';
            }
            return redirect('dosen')->with(['informasi'=>$this->informasi]);
        }
      }
   		
	  public function edit($id){
        $dosen = Dosen::find($id);
        return view('dosen.edit')->with(array('dosen'=>$dosen));
    }

    public function lihat($id){
        $dosen = Dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

    public function update($id, Request $input){
      $dosen = Dosen::find($id);
        $pengguna = $dosen->pengguna;
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        $dosen->save();
        if (!is_null($input->username)){
                $pengguna->fill($input->only('username')); 
            if (!empty($input->password)) {
                $pengguna->password = $input->password;
            }
            if ($pengguna->save()) {
                $this->informasi = 'Berhasil Simpan Data';
            }
        }else{
            $this->informasi = 'Gagal Simpan Data';
        }    
        return redirect('dosen')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id){
        $dosen = dosen::find($id);
        $informasi = $dosen->delete()?'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('dosen')->with(['informasi'=>$this->informasi]);
    }
}

