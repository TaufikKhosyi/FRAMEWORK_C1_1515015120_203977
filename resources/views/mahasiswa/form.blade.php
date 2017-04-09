<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
	{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Masukkan Nama Mahasiswa"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nim">NIM</label>
	<div class="col-sm-10">
	{!! Form::text('nim',null,['class'=>'form-control','id'=>'nim', 'placeholder'=>"Masukkan NIM Mahasiswa"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
	{!! Form::textarea('alamat',null,['class'=>'form-control', 'id'=>'alamat', 'placeholder'=>"Masukkan Alamat Mahasiswa"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
	{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Masukkan Username"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
	{!! Form::password('password',['class'=>'form-control','placeholder'=>"Masukkan Password"]) !!}
	</div>
</div>
