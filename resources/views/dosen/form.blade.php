<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
	{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Masukkan Nama Dosen"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">NIP</label>
	<div class="col-sm-10">
	{!! Form::text('nip',null,['class'=>'form-control','placeholder'=>"Masukkan NIM Dosen"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
	{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Masukkan Alamat Dosen"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
	{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Masukkan Username"]) !!}
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
	{!! Form::password('password',['class'=>'form-control','placeholder'=>"Masukkan Password"]) !!}
	</div>
</div>
