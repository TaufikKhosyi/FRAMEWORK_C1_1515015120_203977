<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_matakuliah;
use App\Mahasiswa;
use App\Dosen_matakuliah;
use App\Ruangan;

class Jadwal_matakuliahController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaJadwalMatakuliah = Jadwal_matakuliah::all();
        return view('jadwal_matakuliah.awal', compact('semuaJadwalMatakuliah'));
    }
    public function tambah(){
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_matakuliah;
        return view('jadwal_matakuliah.tambah', compact('mahasiswa','ruangan','dosen_matakuliah'));
    }
    public function simpan(Request $input){
        $jadwal_matakuliah = new Jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwal_matakuliah->save()){
            $this->informasi = 'Jadwal Mahasiswa Berhasil di Simpan';
        }
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $jadwal_matakuliah = Jadwal_matakuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_matakuliah;
        return view('jadwal_matakuliah.edit', compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matakuliah'));
    }
    public function lihat($id){
        $jadwal_matakuliah = Jadwal_matakuliah::find($id);
        return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
    }
    public function update($id, Request $input){
        $jadwal_matakuliah = Jadwal_matakuliah::find($id);
        $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
        $informasi = $jadwal_matakuliah->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $jadwal_matakuliah = Jadwal_matakuliah::find($id);
        $informasi = $jadwal_matakuliah->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }
}

