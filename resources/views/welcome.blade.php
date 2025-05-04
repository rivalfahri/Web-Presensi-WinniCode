<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Absensi Karyawan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #00bcd4;
        }

        .welcome-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }

        .welcome-card {
            max-width: 420px;
            width: 100%;
            padding: 30px 25px;
            border-radius: 15px;
            background-color: #00bcd4;
            border: 1px solid #00bcd4;
            box-shadow: 0 4px 15px rgba(0, 188, 212, 0.3);
            text-align: center;
        }

        .welcome-logo {
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #00bcd4;
            box-shadow: 0 0 10px #00bcd4;
        }

        p.text-primary {
            font-size: 1.5rem;
            font-weight: 700;
            color: #00bcd4;
            margin-bottom: 0.5rem;
        }

        span.text-secondary {
            font-size: 1.25rem;
            font-weight: 600;
            color: #66e0ff;
        }

        .welcome-links a {
            display: inline-block;
            margin-top: 10px;
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 8px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            color: #16213e;
            background-color: #00bcd4;
            box-shadow: 0 0 8px #00bcd4;
            text-decoration: none;
        }

        .welcome-links a:hover {
            background-color: #0097a7;
            box-shadow: 0 0 15px #0097a7;
            color: #e0f7fa;
            text-decoration: none;
        }

        .welcome-links a.btn-danger {
            background-color: #e91e63;
            color: #fff;
            box-shadow: 0 0 8px #e91e63;
        }

        .welcome-links a.btn-danger:hover {
            background-color: #ad1457;
            box-shadow: 0 0 15px #ad1457;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="welcome-card">
            <div class="text-center">
                <img src="/images/1.png" alt="Logo" class="welcome-logo rounded shadow mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <p class="text-center fs-4 fw-semibold text-primary mb-2">Selamat datang di Aplikasi Absensi Karyawan<br/>
            <span class="text-secondary fs-5">WINNICODE</span></p>
            <div class="welcome-links d-flex justify-content-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary px-4">Login Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-danger px-4">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary px-4">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
