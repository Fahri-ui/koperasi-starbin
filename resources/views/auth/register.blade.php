<!DOCTYPE html>
<html>

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
			</div>
			<form action="{{ route('registrasi') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<h3>Formulir Pendaftaran</h3>
				@if ($errors->any())
				<div class="alert alert-danger flash-message" style="background-color: salmon; color: aliceblue; border-radius: 20px; text-align:center; padding:10px;">
					<ul>
						@foreach ($errors->all() as $error)
						{{ $error }}
						@endforeach
					</ul>
				</div>
				@endif
				
				@if (Session::has('success'))
				<div class="alert alert-success flash-message" style="background-color: lightgreen; color: aliceblue; border-radius: 20px;">
					{{ Session::get('success') }}
				</div>
				@endif

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

	<script>
		// Auto-hide flash message setelah 5 detik
		setTimeout(() => {
			document.querySelectorAll('.flash-message').forEach(el => {
				el.style.transition = "opacity 0.5s ease";
				el.style.opacity = "0";
				setTimeout(() => el.remove(), 500);
			});
		}, 4000);
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>