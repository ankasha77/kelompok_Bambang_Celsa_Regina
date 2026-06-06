<div>
 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 1 – Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f8f9ff; color: #222; display: flex; flex-direction: column; min-height: 100vh; }
        .navbar { background: #fff; border-bottom: 2px solid #e0e7ff; }
        .navbar-brand { font-weight: 800; color: #4f46e5 !important; }
        .nav-link { color: #555 !important; font-weight: 600; }
        .nav-link:hover, .nav-link.active { color: #4f46e5 !important; }
        .hero { background: linear-gradient(135deg, #eef2ff, #fce7f3); padding: 80px 20px; text-align: center; }
        .hero h1 { font-size: 2.5rem; font-weight: 800; color: #1e1b4b; }
        .hero h1 span { color: #4f46e5; }
        .hero p { color: #666; max-width: 480px; margin: 16px auto 28px; }
        .btn-main { background: #4f46e5; color: white; padding: 12px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; margin-right: 8px; display: inline-block; }
        .btn-main:hover { background: #4338ca; color: white; }
        .btn-outline { background: transparent; color: #4f46e5; border: 2px solid #4f46e5; padding: 10px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-block; }
        .btn-outline:hover { background: #4f46e5; color: white; }
        .features { padding: 60px 20px; }
        .features h2 { text-align: center; font-weight: 800; font-size: 1.6rem; margin-bottom: 8px; }
        .sub { text-align: center; color: #888; margin-bottom: 36px; }
        .card { border: none; border-radius: 12px; padding: 28px 20px; background: #fff; box-shadow: 0 2px 12px rgba(0,0,0,0.06); height: 100%; }
        .card-icon { font-size: 2rem; margin-bottom: 12px; }
        .card h5 { font-weight: 800; margin-bottom: 8px; }
        .card p { color: #777; font-size: 0.9rem; line-height: 1.7; }
        .content-wrap { flex: 1; }
        footer { background: #1e1b4b; color: rgba(255,255,255,0.6); text-align: center; padding: 20px; font-size: 0.88rem; }
        footer span { color: #a5b4fc; font-weight: 700; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="home.html">✦ MyWebsite</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="home.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="content-wrap">
    <div class="hero">
        <h1>Dikumur Dikunyah <span>Assalamualaikum Semuanya!!!</span> 👋</h1>
        <p>Ini adalah halaman Home kelompok kami. Kami adalah mahasiswa Sistem Informasi Universitas Al-Ghifari Bandung.</p>
        <a href="about.html" class="btn-main">Kenali Kami</a>
        <a href="contact.html" class="btn-outline">Hubungi Kami</a>
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
</div>
