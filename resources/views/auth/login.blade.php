<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('login_page/css/style.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Login</h1>
            <form action="{{route('login')}}" method="POST">
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
                <input type="text" name="email" placeholder="Email" value="{{ old('Email') }}">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="login-btn">Login</button>
            </form>
            <button onclick="window.location.href='/'" class="secondary-btn">Kembali ke Landing Page</button>
            <div class="links">
                <p>Belum punya akun? <a href="{{ route('registrasi') }}">Registrasi di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
