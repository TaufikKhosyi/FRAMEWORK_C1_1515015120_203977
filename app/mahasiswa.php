<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Dilihat bahwa pada tabel mahasiswa dan pengguna memiliki hubungan one to one dan antara mahasiswa dan jadwal_matakuliah
//memiliki hubungan one to many

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $guarded = ['id'];

    //eloquent akan mencoba untuk mencocokkan pengguna_id dari model mahasiswa ke id model pengguna, eloquent menentukan 
    //default nama foreign key dengan memerkisa nama fungsi relasi dan suffixing nama fungsi dengan _id
    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }

    //eloquent akan menganggap foreign key pada jadwal_matakuliah adalah mahasiswa_id 
    public function jadwalmatakuliah()
    {
    	return $this->hasMany(jadwalmatakuliah::class,'mahasiswa_id');
    }
}
