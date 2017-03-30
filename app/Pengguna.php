<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Dilihat bahwa pada tabel pengguna dan dosen memiliki hubungan one to one dan antara pengguna dan mahasiswa
//memiliki hubungan one to one juga

class Pengguna extends Model
{
	protected $table = 'pengguna';
//   	protected $fillable = ['username','password'];

	//eloquent akan menganggap foreign key pada mahasiswa adalah pengguna_id 
	public function mahasiswa()
	{
		return $this->hasOne(Mahasiswa::class,'pengguna_id');
	}

	//eloquent akan menganggap foreign key pada dosen adalah pengguna_id 
	public function dosen()
	{
		return $this->hasOne(dosen::class,'pengguna_id');
	}
   
}