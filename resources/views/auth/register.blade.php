<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('register_page/css/style.css') }}">
    <title>Registrasi</title>
</head>
<body>
    <div class="container">
        <div class="register-box">
            <h1>Registrasi</h1>
            <form action="{{ route('registrasi') }}" method="POST" enctype="multipart/form-data">
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
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="tel" name="phone" placeholder="Nomor Telepon" required>
                <textarea name="address" placeholder="Alamat" rows="3" style="resize: none; padding: 10px; border: 1px solid #ccc; border-radius: 20px; font-size: 16px; margin-bottom: 15px;" required></textarea>
                <div>
                    <label for="gambar"></label>
                    <input type="file" name="gambar" id="gambar" requuired>
                </div>
                
                <button type="submit" class="register-btn">Register</button>
            </form>
            <div class="links">
                <p>Sudah punya akun? <a href="{{ route('login')}}">Login di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
