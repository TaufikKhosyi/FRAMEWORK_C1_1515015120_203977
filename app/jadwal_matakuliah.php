<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Dilihat bahwa pada tabel jadwal_matakuliah dan dosen_matakuliah memiliki hubungan many to one dan antara jadwal_matakuliah dan
//ruangan memiliki hubungan many to one juga serta jadwal_matakuliah dan mahasiswa memiliki hubungan many to one juga

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $guarded = ['id'];

    //eloquent akan mencoba untuk mencocokkan dosen_matakuliah_id dari model jadwal_matakuliah ke id model dosen_matakuliah, eloquent menentukan 
    //default nama foreign key dengan memerkisa nama fungsi relasi dan suffixing nama fungsi dengan _id
    public function dosen_matakuliah()
    {
    	return $this->belongsTo(dosen_matakuliah::class);
    }
    //eloquent akan mencoba untuk mencocokkan ruangan_id dari model jadwal_matakuliah ke id model ruangan
    public function ruangan()
    {
    	return $this->belongsTo(ruangan::class);
    }
    //eloquent akan mencoba untuk mencocokkan mahasiswa_id dari model jadwal_matakuliah ke id model mahasiswa
    public function mahasiswa()
    {
    	return $this->belongsTo(mahasiswa::class);
    }
}
