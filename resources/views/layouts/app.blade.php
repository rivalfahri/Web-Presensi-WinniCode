<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aplikasi Absensi') }}</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            padding-top: 56px; /* Adjust this value according to your navbar height */
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            color: #00bcd4;
            min-height: 100vh;
        }

        .navbar {
            transition: top 0.3s;
            background-color: #0d394f !important;
            box-shadow: 0 0 10px #00bcd4;
        }

        .navbar .navbar-brand {
            color: #00bcd4 !important;
            font-weight: 700;
            text-shadow: 0 0 8px #00bcd4;
        }

        .navbar .nav-link {
            color: #66e0ff !important;
            text-shadow: 0 0 5px #00bcd4;
        }

        .navbar .nav-link:hover, .navbar .nav-link:focus {
            color: #00bcd4 !important;
            text-shadow: 0 0 10px #00bcd4;
        }

        .navbar.sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        #sidebar {
            min-width: 225px;
            max-width: 225px;
            min-height: 100vh;
            background-color: #0d394f;
            box-shadow: 0 0 10px #00bcd4;
        }

        .nav-link i {
            margin-right: 5px;
            color: #00bcd4;
        }

        .nav-link {
            display: flex;
            align-items: center;
            color: #66e0ff;
        }

        .nav-link:hover {
            color: #00bcd4;
            text-shadow: 0 0 8px #00bcd4;
        }

        .card-link {
            text-decoration: none;
            color: inherit;
        }

        footer.bg-dark {
            background-color: #0d394f !important;
            box-shadow: 0 0 10px #00bcd4;
        }

        footer.bg-dark p {
            color: #66e0ff;
            text-shadow: 0 0 5px #00bcd4;
            margin: 0;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Aplikasi Absensi ') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>

                    {{-- Centre Navbar --}}
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="karyawanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">badge</i> Karyawan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="karyawanDropdown">
                                <a class="dropdown-item" href="/admin/karyawan">Data Karyawan</a>
                                <a class="dropdown-item" href="/admin/lembur">Lembur Karyawan</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="presensiDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">event_available</i> Presensi
                            </a>
                            <div class="dropdown-menu" aria-labelledby="presensiDropdown">
                                <a class="dropdown-item" href="/admin/presensi">Absen karyawan</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="cutiDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">calendar_view_month</i> Cuti
                            </a>
                            <div class="dropdown-menu" aria-labelledby="cutiDropdown">
                                <a class="dropdown-item" href="/admin/cuti">Cuti Karyawan</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <i class="bi bi-box-arrow-in-right"></i> {{ __('Login') }}
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <i class="bi bi-person-plus"></i> {{ __('Register') }}
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="material-icons">account_circle</i> {{ Auth::user()->name }} ({{ Auth::user()->role }})
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-dark text-center py-3">
            <div class="container">
                <p>&copy; 2025 Aplikasi Presensi. All rights reserved.</p>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        $('.alert').alert()
    </script>
    <script>
        $(document).ready(function () {
            $('.table').DataTable();
        });
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</body>
</html>
