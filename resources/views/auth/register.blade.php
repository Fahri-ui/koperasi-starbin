<!DOCTYPE html>
<html>

<<<<<<< HEAD
<head>
	<meta charset="utf-8">
	<title>Registrasi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="{{asset('new-register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="{{asset('new-register/css/style.css')}}">
</head>

<body>

	<div class="wrapper">
		<div class="inner">
			<div class="image-holder">
				<img src="{{ asset('new-register/images/registration-form-1.png') }}" alt="Gambar Formulir">
=======
						<!--jika sukses -->
						@if (Session::has('success'))
							<div class="alert alert-success" style="background-color: lightgreen; color: aliceblue; border-radius:20px;">
								{{ Session::get('success') }}
							</div>
						@endif
						<input class="text" type="text" name="fullname" placeholder="Nama Lengkap" style="border-radius: 20px;" min="5" required>
						<input class="text email" type="email" name="email" placeholder="Email" style="border-radius: 20px;" required>
						<input class="text" type="password" name="password" placeholder="Password" style="border-radius: 20px;" required>
						<input class="text" type="text" name="phone" placeholder="Nomor Telepon" style="border-radius: 20px; margin: 40px 0;" required>
						<input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" style="color:white; border: 1px solid rgba(255, 255, 255, 0.37); border-radius:20px;margin-bottom:40px;font-weight: 100; width: 95%; padding:10px; font-size:1rem;" required>
						<textarea class="text address" name="address" placeholder="Alamat" style="border-radius: 20px;" required></textarea>
						<input type="submit" value="Registrasi" style="border-radius: 20px;">
					</form>
					<p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
				</div>
>>>>>>> 7d2a299a1135e90019954bc09ef2ada2686be4ca
			</div>
			<form action="{{ route('registrasi') }}" method="POST" enctype="multipart/form-data">
				@csrf
				@if ($errors->any())
				<div class="alert alert-danger" style="background-color: salmon; color: aliceblue; border-radius: 20px;">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif

				@if (Session::has('success'))
				<div class="alert alert-success" style="background-color: lightgreen; color: aliceblue; border-radius: 20px;">
					{{ Session::get('success') }}
				</div>
				@endif
				<h3>Formulir Pendaftaran</h3>

				<div class="form-wrapper">
					<input type="text" name="fullname" placeholder=" Nama lengkap minimal 5 karakter." class="form-control" required minlength="5">
					<i class="zmdi zmdi-account"></i>
				</div>

				<div class="form-wrapper">
					<input type="email" name="email" placeholder="Alamat Email." class="form-control" required>
					<i class="zmdi zmdi-email"></i>
				</div>

				<div class="form-wrapper">
					<input type="password" name="password" placeholder="Kata sandi minimal 8 karakter." class="form-control" required minlength="8">
					<i class="zmdi zmdi-lock"></i>
				</div>

				<div class="form-wrapper">
					<input type="text" name="phone" placeholder="Nomor HP diawali 62 dan terdiri dari 9-13 nomor." class="form-control" required pattern="^62[0-9]{9,13}$">
					<i class="zmdi zmdi-phone"></i>
				</div>

				<div class="form-wrapper">
					<input type="text" name="address" placeholder=" Alamat minimal 15 karakter." class="form-control" required minlength="15">
					<i class="zmdi zmdi-home"></i>
				</div>

				<div class="form-wrapper">
					<input type="file" name="gambar" class="form-control" required accept=".jpeg,.jpg,.png,.gif">
					<i class="zmdi zmdi-upload"></i>
				</div>

				<button type="submit">
					Daftar <i class="zmdi zmdi-arrow-right"></i>
				</button>
				<div class="login">
					Sudah memiliki akun?
					<a href="{{ route('login') }}">Login</a>
				</div>
			</form>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>