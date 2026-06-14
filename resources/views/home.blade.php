<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 1 – Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @vite(['resources/css/1.css'])
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">✦ MyWebsite</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="content-wrap">
    <div class="hero">
        <h1>Dikumur Dikunyah <span>Assalamualaikum Semuanya!!!</span> 👋</h1>
        <p>Ini adalah halaman Home kelompok kami. Kami adalah mahasiswa Sistem Informasi Universitas Al-Ghifari Bandung.</p>
        <a href="{{ url('/about') }}" class="btn-main">Kenali Kami</a>
        <a href="{{ url('/contact') }}" class="btn-outline">Hubungi Kami</a>
    </div>
    
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
    <p>© 2026 <span>MyWebsite</span>. All rights reserved. Kelompok 1 – Sistem Informasi</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>