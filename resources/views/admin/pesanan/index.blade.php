<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin – Kelola Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f3f4f6; font-family: 'Inter', system-ui, sans-serif; }
        .main-container { padding: 40px 30px; max-width: 1200px; margin: 0 auto; }
        .page-title { font-weight: 800; color: #1e1b4b; margin-bottom: 20px; }
        .table-card { background: white; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; overflow: hidden; }
        .table-header { background: #1e1b4b; color: white; padding: 20px 25px; }
        .table-body-padding { padding: 20px; }
        .table thead th { background-color: #f9fafb; text-transform: uppercase; font-size: 11px; font-weight: 700; letter-spacing: 0.5px; color: #6b7280; padding: 15px; border-bottom: 2px solid #edf2f7; }
        .table tbody td { padding: 15px; font-size: 14px; color: #374151; border-bottom: 1px solid #f3f4f6; vertical-align: middle; }
        .badge { padding: 6px 12px; font-weight: 600; border-radius: 8px; }
        .btn-back { background: #374151; color: white; border-radius: 8px; font-weight: 600; padding: 10px 20px; text-decoration: none; display: inline-block; margin-top: 20px; }
        .btn-back:hover { background: #1f2937; color: white; }
    </style>
</head>
<body>
<div class="main-container">
    <h2 class="page-title">📋 Kelola Pesanan</h2>

    @if(session('success'))
        <div class="alert alert-success rounded-3">{{ session('success') }}</div>
    @endif

    <div class="table-card">
        <div class="table-header">
            <h5 class="fw-bold m-0">Daftar Pesanan Masuk</h5>
        </div>
        <div class="table-body-padding">
            <div class="table-responsive">
                <table class="table align-middle m-0">
                    <thead>
                        <tr>
                            <th>Nama</th><th>WhatsApp</th><th>Layanan</th><th>Catatan</th><th>Status</th><th style="width:220px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pesanans as $p)
                        <tr>
                            <td class="fw-bold text-dark">{{ $p->nama }}</td>
                            <td>{{ $p->whatsapp }}</td>
                            <td>{{ $p->layanan_nama }}</td>
                            <td class="text-muted">{{ $p->catatan ?? '-' }}</td>
                            <td>
                                <span class="badge bg-{{ $p->status == 'Selesai' ? 'success' : ($p->status == 'Diproses' ? 'warning' : 'secondary') }}">
                                    {{ $p->status }}
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('admin.pesanan.updateStatus', $p->id) }}" method="POST" class="d-flex gap-1 mb-1">
                                    @csrf @method('PUT')
                                    <select name="status" class="form-select form-select-sm rounded-3" style="width:auto">
                                        <option value="Pending" {{ $p->status=='Pending'?'selected':'' }}>Pending</option>
                                        <option value="Diproses" {{ $p->status=='Diproses'?'selected':'' }}>Diproses</option>
                                        <option value="Selesai" {{ $p->status=='Selesai'?'selected':'' }}>Selesai</option>
                                    </select>
                                    <button class="btn btn-sm btn-primary rounded-3">Update</button>
                                </form>
                                <form action="{{ route('admin.pesanan.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Hapus pesanan ini?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger rounded-3">🗑️ Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="6" class="text-center text-muted py-4">Belum ada pesanan masuk.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a href="{{ route('admin.dashboard') }}" class="btn-back">← Kembali ke Dashboard</a>
</div>
</body>
</html>