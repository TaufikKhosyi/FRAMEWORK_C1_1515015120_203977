<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Dilihat bahwa pada tabel dosen_matakuliah dan dosen memiliki hubungan many to one dan antara dosen_matakuliah dan
//matakuliah memiliki hubungan many to one juga serta dosen_matakuliah dan jadwal_matakuliah memiliki hubungan
//one to many juga

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $guarded = ['id'];

    //eloquent akan mencoba untuk mencocokkan dosen_id dari model dosen_matakuliah ke id model dosen, eloquent menentukan 
    //default nama foreign key dengan memerkisa nama fungsi relasi dan suffixing nama fungsi dengan _id
    public function dosen()
    {
    	return $this->belongsTo(dosen::class);
    }
    //eloquent menyesuaikan nama kolom dari keys yang ada pada tabel dengan mengatur argumen tambahan
    public function matakuliah()
    {
    	return $this->belongsToMany(matakuliah::class);

    //eloquent akan menganggap foreign key pada jadwal_matakuliah adalah dosen_matakuliah_id
    }
    public function jadwal_matakuliah()
    {
    	return $this-hasMany(jadwal_matakuliah::class,'dosen_matakuliah_id');
    }
    public function listDosenDanMatakuliah(){
        $out = [];
        foreach ($this->all() as $dsnMtk) {
            $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (matakuliah{$dsnMtk->matakuliah->title})";
        }
        return $out;
    }
}
