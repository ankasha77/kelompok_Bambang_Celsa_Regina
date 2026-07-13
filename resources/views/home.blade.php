<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 5 – Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/1.css','resources/css/1.css'])
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">✦ MyWebsite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Contact</a></li>
                <li class="nav-item"><a class ="nav-link" href="{{ route('layanan') }}">Layanan</a></li>
                
                <!-- TOMBOL LOGIN / LOGOUT DINAMIS REVISI KELOMPOK 9 -->
                @if (Route::has('login'))
                    @auth
                        <!-- Jika user sudah login, tampilkan nama dan tombol Logout -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle bg-light px-3 py-1 rounded text-dark fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                👤 {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->role === 'admin')
                                    <li><a class="dropdown-menu-item dropdown-item fw-bold text-primary" href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                @endif
                                <li>
                                    <!-- Menghubungkan langsung ke rute logout kilat anti-error 419 -->
                                    <a class="dropdown-item text-danger fw-bold" href="{{ route('logout.cepat') }}">
                                        Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <!-- Jika user belum login (posisi guest), tampilkan tombol Login -->
                        <li class="nav-item">
                            <a class="btn btn-sm btn-primary px-3 fw-bold" href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="content-wrap">

    <!-- HERO PAKAI BOOTSTRAP CAROUSEL -->
    <div id="heroCarousel" class="carousel slide hero" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <h1>Dikumur Dikunyah <span>👋</span></h1>
                <p>Kami adalah mahasiswa Sistem Informasi Universitas Al-Ghifari Bandung.</p>
                <a href="{{ route('about') }}" class="btn-main">Kenali Kami</a>
                <a href="{{ route('contact.index') }}" class="btn-outline">Hubungi Kami</a>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <h1><span>Assalamualaikum</span><br>Semuanya!!! 🙏</h1>
                <p>Ini adalah halaman Home kelompok kami. Selamat datang!</p>
                <a href="{{ route('about') }}" class="btn-main">Kenali Kami</a>
                <a href="{{ route('contact.index') }}" class="btn-outline">Hubungi Kami</a>
            </div>

        </div>

        <!-- Dots Bootstrap -->
        <div class="carousel-indicators" style="position:relative; margin-top:24px;">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" style="background:#4f46e5; width:10px; height:10px; border-radius:50%; border:none;"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" style="background:#c7d2fe; width:10px; height:10px; border-radius:50%; border:none;"></button>
        </div>
    </div>

    <!-- FEATURES -->
    <div class="features">
        <div class="container">
            <h2>Tentang Kelompok Kami</h2>
            <p class="sub">Kami adalah tim kecil yang solid dan penuh semangat 💪</p>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">🎯</div>
                        <h5>Fokus & Terstruktur</h5>
                        <p>Setiap tugas dikerjakan dengan perencanaan dan pembagian kerja yang jelas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">💡</div>
                        <h5>Kreatif & Inovatif</h5>
                        <p>Selalu mencari pendekatan baru dalam menyelesaikan setiap tantangan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">🤝</div>
                        <h5>Solid & Kompak</h5>
                        <p>Kerja sama tim adalah kunci. Kami saling mendukung untuk hasil terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<footer>
    <p>© 2026 <span>MyWebsite</span>. All rights reserved. Kelompok 5 – Sistem Informasi</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
