<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Dilihat bahwa pada tabel matakuliah dan dosen_matakuliah memiliki hubungan one to many

class matakuliah extends Model
{
    protected $table = 'matakuliah';
//    protected $fillable = ['id','title','keterangan'];

    //eloquent akan menganggap foreign key pada dosen_matakuliah adalah matakuliah_id 
    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class,'matakuliah_id');
    }
}

