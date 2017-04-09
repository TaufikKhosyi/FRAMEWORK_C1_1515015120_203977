<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Dilihat bahwa pada tabel dosen dan pengguna memiliki hubungan one to one dan antara dosen dan dosen_matakuliah
//memiliki hubungan one to many

class dosen extends Model 
{
    protected $table = 'dosen'; 
    protected $guarded = ['id'];

    //eloquent akan mencoba untuk mencocokkan pengguna_id dari model dosen ke id model pengguna, eloquent menentukan 
    //default nama foreign key dengan memerkisa nama fungsi relasi dan suffixing nama fungsi dengan _id
    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }
    //eloquent akan menganggap foreign key pada dosen_matakuliah adalah dosen_id 
    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class,'dosen_id');
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
    public function listDosenDanNip(){
        $out = [];
        foreach ($this->all() as $Dsn) {
            $out[$Dsn->id] = "{$Dsn->nama} ({$Dsn->nip})";
        }
        return $out;
    }
}
