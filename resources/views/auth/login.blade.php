<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="{{asset('login-template/images/Logo Koperasi STARBIN REAL (1).png')}}" rel="icon">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('login-template/images/icons/Logo Koperasi STARBIN REAL (1).png')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-template/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-templatefonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-templatefonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-template/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login-template/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-template/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-template/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login-template/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-template/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-template/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{ asset('login-template/images/bg-01.jpg') }}');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf
					@if ($errors->any())
							<div class="alert alert-denger" style="background-color: lightcoral; margin: 20px; border-radius: 20px;">
								<ul>
									@foreach ($errors->all() as $item)
										<li>{{ $item }}</li>
									@endforeach
								</ul>
							</div>
						@endif
		
						@if (Session::get('success'))
							<div class="alert alert-success alert-dismissible fade show" style="background-color: lightgreen; margin:20px; border-radius:20px;">
								<ul>
									<li>{{ Session::get('success') }}</li>
								</ul>
							</div>
						@endif

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter a valid email">
						<input class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						Belum punya akun? 
						<a class="txt1" href="{{ route('registrasi') }}">
							Registrasi Disini
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('login-template/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-template/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-template/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login-template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-template/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-template/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login-template/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-template/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-template/js/main.js')}}"></script>

</body>
</html>
