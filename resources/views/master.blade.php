<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title','Halaman Awal') | Laboratorium Pemrograman FW</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
<style type="text/css">
	body{
		padding-top:70px;
		padding-bottom:70px;
	}
	.starter-template{
		padding:40px 15px;
		text-align:center;
	}
	.form-horizontal{
		padding-top:15px 10px;
		
	}

	footer{
			padding-top: 15px;
			text-align:right;
	}
</style>	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{url('/')}}" class="navbar-brand"><i class="fa fa-adjust"style="color:#1da1f2"></i> Laravel-5</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"style="color:#1da1f2"></i> Mahasiswa<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('mahasiswa')}}"><i class="fa fa-user"style="color:#1da1f2"></i> Data Mahasiswa</a></li>
							<li class="divider"></li>
							<li><a href="{{url('jadwal_matakuliah')}}"><i class="fa fa-indent"style="color:#1da1f2"></i> Jadwal Mahasiswa</a></li>
						</ul>
					</li>

					
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"style="color:#1da1f2"></i> Dosen<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('dosen')}}"><i class="fa fa-user"style="color:#1da1f2"></i> Data Dosen</a></li>
							<li class="divider"></li>
							<li><a href="{{url('dosen_matakuliah')}}"><i class="fa fa-book"style="color:#1da1f2"></i> Jadwal Dosen Mengajar</a></li>
						</ul>
					</li>
						<li class="dropdown active">
							<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print"style="color:#1da1f2"></i> Pengaturan<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('pengguna')}}"><i class="fa fa-user"style="color:#1da1f2"></i> Pengguna</a></li>
							<li class="divider"></li>
							<li><a href="{{url('ruangan')}}"><i class="fa fa-inbox"style="color:#1da1f2"></i> Ruangan</a></li>
							<li><a href="{{url('matakuliah')}}"><i class="fa fa-book"style="color:#1da1f2"></i> Matakuliah</a></li>
						
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse-->
		</div>
	</nav>

		<div class="clearfix"></div>
		<div class="container">
			@if (Session::has('informasi'))
				<div class="alert alert-info">
					<strong>Informasi :</strong>
		{{Session::get('informasi')}}
		</div>
		@endif
		@yield('container')
		</div>
		<nav class="navbar navbar-default navbar-fixed-bottom">
			<footer class="container">
				edited by <a href="http://instagram.com/taufikkhosyi"><span><i class="fa fa-instagram"
				style="color:#1da1f2"></i> TaufikKhosyi</span></a>
				||
				<a href="http://facebook.com/taufikurrahmankhosyi"><span><i class="fa fa-facebook"
				style="color:#1da1f2"></i> TaufikKhosyi</span></a>
			</footer>
		</nav>
		<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript">
			$(function(){
				$('[data-toggle="tooltip"]').tooltip()
			});
			</script>
		</body>
		