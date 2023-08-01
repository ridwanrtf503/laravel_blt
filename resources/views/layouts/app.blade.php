<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- Tambahkan link CSS Bootstrap dan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body style="background-image: url('{{ asset('loginxregis') }}/img/bg.jpeg')" class="text-light">
    <div id="app">

        <!-- Tambahkan sidebar dan navigasi admin di sini -->
        <div class="sidebar">
            <div class="logo">
                <img src="{{ asset('img') }}/logo.jpeg" alt="Logo">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="/dashboard/admin"><i class="fas fa-home"></i> Dashboard</a></li>
                    <!-- Tambahkan tautan menu navigasi lainnya -->
                </ul>
                <ul>
                    <li><a href="{{ route('masyarakat.index') }}"><i class="fas fa-user"></i> Data Penduduk</a></li>
                    <!-- Tambahkan tautan menu navigasi lainnya -->
                </ul>
                <ul>
                    <li><a href="/"><i class="fas fa-list"></i> Landing Page</a></li>
                    <!-- Tambahkan tautan menu navigasi lainnya -->
                </ul>
                <ul>
                    <li><a href="{{ route('penerima.index') }}"><i class="fas fa-list"></i> Penerima Bantuan</a>
                    </li>
                    <!-- Tambahkan tautan menu navigasi lainnya -->
                </ul>
                <ul>
                    <li><a href="{{ route('pengumuman.index') }}"><i class="fas fa-list"></i> Pengumuman</a></li>
                    <!-- Tambahkan tautan menu navigasi lainnya -->
                </ul>
                <ul>
                    <li><a href="{{ route('pencairan.index') }}"><i class="fas fa-list"></i> Pencairan</a></li>
                    <!-- Tambahkan tautan menu navigasi lainnya -->
                </ul>
                <ul>
                    <li><a href="{{ route('profile.index') }}"><i class="fas fa-cog"></i> Profile</a></li>
                    <!-- Tambahkan tautan menu navigasi lainnya -->
                </ul>
            </div>
        </div>

        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fas-user"></i>{{ Auth::user()->name }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endauth

                        </ul>
                    </div>

                </div>
            </nav>

            <main class="py-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Tambahkan script JS Bootstrap dan Font Awesome -->
    <!-- Tautkan file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
