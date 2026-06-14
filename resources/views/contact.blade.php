<div>
  <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 1 – Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @vite(['resources/css/2.css'])
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
