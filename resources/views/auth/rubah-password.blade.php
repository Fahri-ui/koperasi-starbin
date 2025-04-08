<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #2E86DE, #74b9ff);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .password-box {
            background: #fff;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        .password-box h4 {
            color: #2E86DE;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-primary {
            background-color: #2E86DE;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1e6fc9;
        }

        .flash-message {
            border-radius: 12px;
            padding: 10px 15px;
        }

        .bi-lock-fill {
            font-size: 1.3rem;
        }
    </style>
</head>

<body>

    <div class="password-box">
        <h4 class="text-center">
            <i class="bi bi-lock-fill me-2"></i>Ganti Password Baru
        </h4>

        @if ($errors->any())
        <div class="alert alert-danger flash-message" style="background-color: salmon; color: #fff; border-radius: 20px; position: relative;">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
            </ul>
        </div>
        @endif

        @if (Session::has('success'))
        <div class="alert alert-success flash-message" style="background-color: #33b233; color: #fff; border-radius: 20px; position: relative;">
            {{ Session::get('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('rubahpassword.simpan') }}">
            @csrf

            <div class="mb-3">
                <label for="password" class="form-label">Password Baru</label>
                <input type="password" name="password" id="password" class="form-control" required minlength="6">
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required minlength="6">
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold">
                Simpan Password <i class="bi bi-check2-circle ms-1"></i>
            </button>
        </form>
    </div>
    <script>
        // Auto-hide flash message setelah 5 detik
        setTimeout(() => {
            document.querySelectorAll('.flash-message').forEach(el => {
                el.style.transition = "opacity 0.5s ease";
                el.style.opacity = "0";
                setTimeout(() => el.remove(), 500);
            });
        }, 5000);
    </script>

</body>

</html>