<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', function () { 
    return 'hello world';
});

//Route::get('pengguna/{pengguna}', function ($pengguna) { 
//    return "hallo world dari pengguna $pengguna";
//});

Route::get('pengguna/khosyi',function()
{
	$pengguna=new App\pengguna();
	$pengguna->username='khosyi';
	$pengguna->password='khosyi';
	$pengguna->save();
	return "Data dengan username {$pengguna->username} telah disimpan";
});

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('dosen_matakuliah','Dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::get('jadwal_matakuliah','Jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_matakuliahController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::post('ruangan/hapus/{ruangan}','RuanganController@hapus');

