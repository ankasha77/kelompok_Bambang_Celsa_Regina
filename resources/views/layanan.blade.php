<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 5 – Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/1.css'])
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">✦ MyWebsite</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('layanan') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="content-wrap">
    <div class="container">
        <div class="page-header">
            <h1>Layanan <span>Kami</span> 🗣️🛎️</h1>
            <p>Berikut adalah layanan yang kami tawarkan. Silakan pilih layanan yang sesuai dengan kebutuhan Anda dan lakukan pemesanan.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div id="list-layanan" class="row g-3">
            <p>Loading...</p>
        </div>
    </div>
</div>

<!-- MODAL FORM ORDER -->
<div class="modal fade" id="modalOrder" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('pesanan.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Order Layanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Layanan yang dipesan</label>
                        <input type="text" name="layanan_nama" id="input-layanan-nama" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Nomor WhatsApp</label>
                        <input type="text" name="whatsapp" class="form-control" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-3">
                        <label>Catatan (opsional)</label>
                        <textarea name="catatan" class="form-control" placeholder="Contoh: deadline, referensi, dll"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<footer>
    <p>© 2026 <span>MyWebsite</span>. All rights reserved. Kelompok 5 – Sistem Informasi</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
fetch('/api/layanan')
    .then(res => res.json())
    .then(data => {
        let html = '';
        data.forEach(item => {
            html += `
                <div class="col-md-4">
                    <div class="card p-3 h-100 d-flex flex-column">
                        <div style="font-size:2rem;">${item.icon}</div>
                        <h5>${item.nama}</h5>
                        <p>${item.deskripsi}</p>
                        <span class="badge bg-primary mb-3">${item.harga}</span>
                        <button class="btn btn-success mt-auto" onclick="bukaOrder('${item.nama.replace(/'/g, "\\'")}')">Order Sekarang</button>
                    </div>
                </div>
            `;
        });
        document.getElementById('list-layanan').innerHTML = html;
    });

function bukaOrder(namaLayanan) {
    document.getElementById('input-layanan-nama').value = namaLayanan;
    const modal = new bootstrap.Modal(document.getElementById('modalOrder'));
    modal.show();
}
</script>
</body>
</html>