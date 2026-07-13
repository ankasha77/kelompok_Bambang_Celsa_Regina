<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin – Kelola Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f3f4f6; font-family: 'Inter', system-ui, sans-serif; }
        .main-container { padding: 40px 30px; max-width: 1200px; margin: 0 auto; }
        .page-title { font-weight: 800; color: #1e1b4b; margin-bottom: 20px; }
        .btn-add { background: #4f46e5; color: white; border-radius: 8px; font-weight: 600; padding: 10px 20px; text-decoration: none; display: inline-block; margin-bottom: 20px; }
        .btn-add:hover { background: #4338ca; color: white; }
        .table-card { background: white; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; overflow: hidden; }
        .table-header { background: #1e1b4b; color: white; padding: 20px 25px; }
        .table-body-padding { padding: 20px; }
        .table thead th { background-color: #f9fafb; text-transform: uppercase; font-size: 11px; font-weight: 700; letter-spacing: 0.5px; color: #6b7280; padding: 15px; border-bottom: 2px solid #edf2f7; }
        .table tbody td { padding: 15px; font-size: 14px; color: #374151; border-bottom: 1px solid #f3f4f6; vertical-align: middle; }
        .icon-cell { font-size: 22px; text-align: center; }
        .harga-cell { font-weight: 700; color: #15803d; }
        .btn-back { background: #374151; color: white; border-radius: 8px; font-weight: 600; padding: 10px 20px; text-decoration: none; display: inline-block; margin-top: 20px; }
        .btn-back:hover { background: #1f2937; color: white; }
    </style>
</head>
<body>
<div class="main-container">
    <h2 class="page-title">🛠️ Kelola Layanan</h2>
    <a href="{{ route('admin.layanan.create') }}" class="btn-add">+ Tambah Layanan</a>

    @if(session('success'))
        <div class="alert alert-success rounded-3">{{ session('success') }}</div>
    @endif

    <div class="table-card">
        <div class="table-header">
            <h5 class="fw-bold m-0">Daftar Layanan</h5>
        </div>
        <div class="table-body-padding">
            <div class="table-responsive">
                <table class="table align-middle m-0">
                    <thead>
                        <tr>
                            <th style="width:70px;">Icon</th><th>Nama</th><th>Deskripsi</th><th>Harga</th><th style="width:160px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($layanans as $l)
                        <tr>
                            <td class="icon-cell">{{ $l->icon }}</td>
                            <td class="fw-bold text-dark">{{ $l->nama }}</td>
                            <td class="text-muted">{{ $l->deskripsi }}</td>
                            <td class="harga-cell">Rp {{ number_format($l->harga, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('admin.layanan.edit', $l->id) }}" class="btn btn-sm btn-warning rounded-3 text-dark fw-semibold">✏️ Edit</a>
                                <form action="{{ route('admin.layanan.destroy', $l->id) }}" method="POST" style="display:inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger rounded-3 fw-semibold" onclick="return confirm('Yakin hapus?')">🗑️ Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a href="{{ route('admin.dashboard') }}" class="btn-back">← Kembali ke Dashboard</a>
</div>
</body>
</html>