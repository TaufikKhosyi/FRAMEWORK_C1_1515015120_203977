<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Dilihat bahwa pada tabel ruangan dan jadwal_matakuliah memiliki hubungan one to many

class ruangan extends Model
{
    protected $table = 'ruangan';
//    protected $fillable = ['id','title'];

    //eloquent akan menganggap foreign key pada jadwal_matakuliah adalah ruangan_id 
    public function jadwal_matakuliah()
    {
    	return $this->hasMany(jadwal_matakuliah::class,'ruangan_id');
    }
    
}

