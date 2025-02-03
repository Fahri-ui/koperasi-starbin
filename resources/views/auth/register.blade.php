<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Registrasi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('register-template/styles.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('register-template/img/Logo Koperasi STARBIN REAL (1).png')}}" rel="icon">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Registrasi</h1>
			<div class="main-agileinfo" style="border-radius: 20px;">
				<div class="agileits-top">
					<form action="{{ route('registrasi') }}" method="post" enctype="multipart/form-data">
						@csrf
						<!-- jika gagal -->
						@if ($errors->any())
							<div class="alert alert-danger" style="background-color: salmon; color: aliceblue; border-radius:20px; padding:10px; margin-bottom:20px;">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						<!--jika sukses -->
						@if (Session::has('success'))
							<div class="alert alert-success" style="background-color: lightgreen; color: aliceblue; border-radius:20px;">
								{{ Session::get('success') }}
							</div>
						@endif
						<input class="text" type="text" name="fullname" placeholder="Nama Lengkap" style="border-radius: 20px;" required>
						<input class="text email" type="email" name="email" placeholder="Email" style="border-radius: 20px;" required>
						<input class="text" type="password" name="password" placeholder="Password" style="border-radius: 20px;" required>
						<input class="text" type="text" name="phone" placeholder="Nomor Telepon" style="border-radius: 20px; margin: 40px 0;" required>
						<input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" style="color:white; border: 1px solid rgba(255, 255, 255, 0.37); border-radius:20px;margin-bottom:40px;font-weight: 100; width: 95%; padding:10px; font-size:1rem;" required>
						<textarea class="text address" name="address" placeholder="Alamat" style="border-radius: 20px;" required></textarea>
						<input type="submit" value="Registrasi" style="border-radius: 20px;">
					</form>
					<p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
				</div>
			</div>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>