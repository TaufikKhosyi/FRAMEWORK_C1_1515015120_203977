<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
	{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Masukkan Nama Mahasiswa"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">NIM</label>
	<div class="col-sm-10">
	{!! Form::text('nim',null,['class'=>'form-control','placeholder'=>"Masukkan NIM Mahasiswa"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
	{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Masukkan Alamat Mahasiswa"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">ID Pengguna</label>
	<div class="col-sm-10">
	{!! Form::number('pengguna_id',null,['class'=>'form-control','placeholder'=>"Masukkan ID Pengguna"]) !!}
	</div>
</div>
