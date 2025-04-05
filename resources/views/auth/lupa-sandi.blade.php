<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #3793ff, #6c63ff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            padding: 2rem;
            width: 100%;
            max-width: 450px;
        }

        .flash-message {
            border-radius: 12px;
            padding: 10px 15px;
        }

        .text-small {
            font-size: 0.9rem;
        }

        .form-label {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="card">
        <h4 class="text-center mb-3 fw-bold text-primary">Lupa Password</h4>
        <p class="text-center mb-4 text-muted">Masukkan email terdaftar untuk mengganti password Anda</p>

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

        <!-- Form -->
        <form method="POST" action="{{ route('ForgetPassword.check') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" name="email" id="email" class="form-control" required autofocus>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold">
                Lanjut <i class="bi bi-arrow-right-circle-fill ms-1"></i>
            </button>
        </form>

        <div class="text-center mt-4">
            <span class="text-muted">Sudah ingat?</span>
            <a href="{{ route('login') }}" class="text-decoration-none text-primary fw-bold">Kembali ke Login</a>
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

</body>

</html>