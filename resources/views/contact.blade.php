<div>
  <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 1 – Contact</title>
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
        .form-card { background: #fff; border-radius: 12px; padding: 32px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); }
        .form-card h5 { font-weight: 800; color: #1e1b4b; margin-bottom: 24px; }
        label { font-weight: 700; font-size: 0.85rem; color: #555; margin-bottom: 6px; }
        .form-control { border-radius: 8px; border: 1.5px solid #e0e7ff; font-size: 0.95rem; padding: 10px 14px; }
        .form-control:focus { border-color: #4f46e5; box-shadow: 0 0 0 3px rgba(79,70,229,0.1); }
        .btn-send { background: #4f46e5; color: white; border: none; padding: 12px; border-radius: 8px; font-weight: 700; font-size: 1rem; width: 100%; cursor: pointer; }
        .btn-send:hover { background: #4338ca; }
        .info-card { background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); display: flex; align-items: center; gap: 14px; margin-bottom: 14px; }
        .info-icon { font-size: 1.5rem; flex-shrink: 0; }
        .info-card h6 { font-size: 0.78rem; color: #999; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; font-weight: 700; }
        .info-card p { font-size: 0.92rem; font-weight: 600; color: #333; margin: 0; }
        .success-msg { display: none; background: #dcfce7; color: #15803d; border-radius: 8px; padding: 12px 16px; font-weight: 700; margin-top: 14px; font-size: 0.9rem; }
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
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.html">Contact</a></li>
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
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" id="nama" class="form-control" placeholder="Nama kamu...">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" id="email" class="form-control" placeholder="email@kamu.com">
                    </div>
                    <div class="mb-3">
                        <label>Pesan</label>
                        <textarea id="pesan" class="form-control" rows="4" placeholder="Tulis pesanmu di sini..."></textarea>
                    </div>
                    <button class="btn-send" onclick="kirimPesan()">Kirim Pesan 🚀</button>
                    <div class="success-msg" id="successMsg">✅ Pesan berhasil dikirim! Kami akan segera membalas.</div>
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
    <p>©️ 2026 <span>MyWebsite</span>. All rights reserved. Kelompok 1 – Sistem Informasi</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function kirimPesan() {
        const nama = document.getElementById('nama').value.trim();
        const email = document.getElementById('email').value.trim();
        const pesan = document.getElementById('pesan').value.trim();
        if (!nama || !email || !pesan) { alert('Mohon isi semua field!'); return; }
        document.getElementById('successMsg').style.display = 'block';
        document.getElementById('nama').value = '';
        document.getElementById('email').value = '';
        document.getElementById('pesan').value = '';
    }
</script>
</body>
</html>

</div>
