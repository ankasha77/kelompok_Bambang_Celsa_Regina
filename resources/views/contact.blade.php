<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 5 – Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/2.css'])
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">✦ MyWebsite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('contact.index') }}">Contact</a></li>
                <li class="nav-item me-3"><a class="nav-link" href="{{ route('layanan') }}">Layanan</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="page-header">
    <h1>Hubungi <span>Kami</span> 📬</h1>
    <p>Ada pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menghubungi kami!</p>
</div>

<div class="content-wrap">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-md-6">
                <div class="form-card">
                    <h5>💬 Kirim Pesan</h5>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama kamu..." required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email@kamu.com" required>
                        </div>
                        <div class="mb-3">
                            <label>Pesan</label>
                            <textarea name="pesan" class="form-control" rows="4" placeholder="Tulis pesanmu di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn-send">Kirim Pesan 🚀</button>
                    </form>

                    @if(session('success'))
                        <div class="success-msg mt-3 alert alert-success">✅ {{ session('success') }}</div>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-card">
                    <div class="info-icon">🏫</div>
                    <div>
                        <h6>Institusi</h6>
                        <p>Universitas Al-Ghifari Bandung</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">📚</div>
                    <div>
                        <h6>Program Studi</h6>
                        <p>Sistem Informasi – Fak. Teknologi Informasi</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">👥</div>
                    <div>
                        <h6>Kelompok</h6>
                        <p>Kelompok 5 – Angkatan 2025</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">📧</div>
                    <div>
                        <h6>Email</h6>
                        <p>kelompok5@alghifari.ac.id</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">📍</div>
                    <div>
                        <h6>Lokasi</h6>
                        <p>Bandung, Jawa Barat, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<footer>
    <p>©️ 2026 <span>MyWebsite</span>. All rights reserved. Kelompok 5 – Sistem Informasi</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>