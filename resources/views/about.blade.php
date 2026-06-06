<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 5 – About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f8f9ff; color: #222; display: flex; flex-direction: column; min-height: 100vh; }
        .navbar { background: #fff; border-bottom: 2px solid #e0e7ff; }
        .navbar-brand { font-weight: 800; color: #4f46e5 !important; }
        .nav-link { color: #555 !important; font-weight: 600; }
        .nav-link:hover, .nav-link.active { color: #4f46e5 !important; }
        .page-header { background: linear-gradient(135deg, #eef2ff, #fce7f3); padding: 60px 20px; text-align: center; }
        .page-header h1 { font-size: 2rem; font-weight: 800; color: #1e1b4b; }
        .page-header h1 span { color: #4f46e5; }
        .page-header p { color: #666; max-width: 480px; margin: 12px auto 0; }
        .content-wrap { flex: 1; padding: 50px 20px; }
        .section-title { font-weight: 800; font-size: 1.4rem; margin-bottom: 20px; color: #1e1b4b; }
        .vm-card { background: #fff; border-radius: 12px; padding: 28px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); height: 100%; }
        .vm-card h5 { font-weight: 800; color: #4f46e5; margin-bottom: 12px; }
        .vm-card p, .vm-card li { color: #666; font-size: 0.92rem; line-height: 1.8; }
        .vm-card ul { padding-left: 18px; }
        .member-card { background: #fff; border-radius: 12px; padding: 24px 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); text-align: center; height: 100%; }
        .avatar { width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin: 0 auto 12px; }
        .member-card h6 { font-weight: 800; font-size: 0.9rem; margin-bottom: 4px; }
        .nim { font-size: 0.78rem; color: #999; margin-bottom: 8px; }
        .role-badge { display: inline-block; font-size: 0.75rem; font-weight: 700; padding: 3px 12px; border-radius: 50px; background: #eef2ff; color: #4f46e5; }
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
                <li class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-header">
    <h1>Tentang <span>Kami</span></h1>
    <p>Kelompok mahasiswa Sistem Informasi yang bersemangat dan penuh semangat belajar!</p>
</div>
<div class="content-wrap">
    <div class="container">
        <!-- Visi Misi -->
        <h2 class="section-title">Visi & Misi</h2>
        <div class="row g-3 mb-5">
            <div class="col-md-6">
                <div class="vm-card">
                    <h5>🔭 Visi</h5>
                    <p>Menjadi kelompok belajar yang aktif, kolaboratif, dan mampu menghasilkan karya berkualitas sebagai wujud kontribusi nyata dalam dunia pendidikan dan teknologi informasi.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vm-card">
                    <h5>🎯 Misi</h5>
                    <ul>
                        <li>Mengerjakan setiap tugas dengan penuh tanggung jawab</li>
                        <li>Mengedepankan kerja sama dan komunikasi yang baik</li>
                        <li>Terus belajar dan berkembang bersama</li>
                        <li>Menghasilkan output yang berkualitas dan tepat waktu</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Anggota -->
        <h2 class="section-title">Anggota Kelompok 🌟</h2>
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg">
                <div class="member-card">
                    <div class="avatar" style="background:#eef2ff;">👨‍💻</div>
                    <h6>Bambang Taruna P.Y.</h6>
                    <div class="nim">F1B250016</div>
                    <span class="role-badge">Halaman Home</span>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="member-card">
                    <div class="avatar" style="background:#fce7f3;">👩‍🎨</div>
                    <h6>Regina Cahya Agustina Purnomo</h6>
                    <div class="nim">F1B250011</div>
                    <span class="role-badge" style="background:#fce7f3;color:#db2777;">Halaman About</span>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="member-card">
                    <div class="avatar" style="background:#fef9c3;">👩‍🎨</div>
                    <h6>Chelsa Dwi Maulany</h6>
                    <div class="nim">F1B250003</div>
                    <span class="role-badge" style="background:#fef9c3;color:#b45309;">Halaman Contact</span>
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