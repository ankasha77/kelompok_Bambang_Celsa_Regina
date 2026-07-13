<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Kelompok 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f3f4f6; font-family: 'Inter', system-ui, sans-serif; }
        .top-navbar { background: #1e1b4b; color: white; padding: 15px 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .main-container { padding: 40px 30px; max-width: 1200px; margin: 0 auto; }
        .welcome-box { background: white; border-radius: 16px; padding: 30px; margin-bottom: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); border: 1px solid #e5e7eb; }
        .table-card { background: white; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; overflow: hidden; }
        .table-header { background: #1e1b4b; color: white; padding: 20px 25px; }
        .table-body-padding { padding: 20px; }
        .table thead th { background-color: #f9fafb; text-transform: uppercase; font-size: 11px; font-weight: 700; letter-spacing: 0.5px; color: #6b7280; padding: 15px; border-bottom: 2px solid #edf2f7; }
        .table tbody td { padding: 15px; font-size: 14px; color: #374151; border-bottom: 1px solid #f3f4f6; }
        .btn-custom { background: #ef4444; color: white; border-radius: 8px; font-weight: 600; font-size: 14px; transition: background 0.2s; border: none; padding: 8px 16px; text-decoration: none; display: inline-block; }
        .btn-custom:hover { background: #dc2626; color: white; }
        .btn-action { padding: 6px 12px; font-size: 12px; border-radius: 6px; font-weight: 600; text-decoration: none; display: inline-block; }
        .form-edit-box { background: #fffbeb; border: 2px solid #fef3c7; border-radius: 16px; padding: 25px; margin-bottom: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); }
    </style>
</head>
<body>

    <!-- NAVBAR ATAS -->
    <div class="top-navbar d-flex justify-content-between align-items-center">
        <h5 class="fw-bold m-0">✦ Kelompok 9 </h5>
        <div class="d-flex align-items-center gap-3">
            <span class="badge bg-danger px-3 py-2 rounded-pill fw-bold">ADMIN TZY</span>
            <a href="{{ route('logout.cepat') }}" class="btn-custom">Keluar</a>
        </div>
    </div>

    <div class="main-container">
        <!-- NOTIFIKASI SUKSES -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
                ✅ {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- BOX UTAMA -->
        <div class="welcome-box">
            <h2 class="fw-bold text-dark mb-1">Selamat Datang, {{ Auth::user()->name }}! 👋</h2>
            <p class="text-muted m-0">Mengelola data orderan yang masuk</p>
            <a href="{{ route('admin.layanan.index') }}" class="btn btn-primary rounded-3 fw-semibold mt-3">🛠️ Kelola Layanan</a>
            <a href="{{ route('admin.pesanan.index') }}" class="btn btn-success rounded-3 fw-semibold mt-3">📋 Kelola Pesanan</a>
        </div>

        <!-- FORM EDIT INLINE -->
        @if(request()->get('edit_id'))
            @php
                $contactToEdit = \App\Models\Contact::find(request()->get('edit_id'));
            @endphp
            
            @if($contactToEdit)
                <div class="form-edit-box">
                    <h5 class="fw-bold text-warning-emphasis mb-3">✏️ Perbarui Data Pesan (ID: #{{ $contactToEdit->id }})</h5>
                    <form action="{{ route('contact.update', $contactToEdit->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label small fw-bold text-secondary">Nama Pengirim</label>
                                <input type="text" name="name" class="form-control rounded-3" value="{{ $contactToEdit->name }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-bold text-secondary">Email Pengirim</label>
                                <input type="email" name="email" class="form-control rounded-3" value="{{ $contactToEdit->email }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-bold text-secondary">Isi Pesan Masukan</label>
                                <input type="text" name="pesan" class="form-control rounded-3" value="{{ $contactToEdit->pesan ?? $contactToEdit->message ?? '' }}" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-secondary px-3 rounded-3 fw-semibold">Batal</a>
                            <button type="submit" class="btn btn-sm btn-warning px-4 rounded-3 fw-semibold text-white fw-bold" style="background: #f59e0b; border: none;">Simpan Perubahan 💾</button>
                        </div>
                    </form>
                </div>
            @endif
        @endif

        <!-- KARTU TABEL DATA UTAMA -->
        <div class="table-card">
            <div class="table-header">
                <h5 class="fw-bold m-0">✉️ Kotak Masuk Pesan User</h5>
            </div>
            
            <div class="table-body-padding">
                <div class="table-responsive">
                    <table class="table align-middle m-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No</th>
                                <th>Nama Pengirim</th>
                                <th>Email Pengirim</th>
                                <th>Isi Pesan Masukan</th>
                                <th style="width: 180px;" class="text-center">Aksi Kendali</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($all_contacts) && $all_contacts->count() > 0)
                                @foreach($all_contacts as $index => $contact)
                                    <tr style="{{ request()->get('edit_id') == $contact->id ? 'background-color: #fffde6;' : '' }}">
                                        <td>{{ $index + 1 }}</td>
                                        <td class="fw-bold text-dark">{{ $contact->name ?? 'Anonim' }}</td>
                                        <td><span class="text-muted">{{ $contact->email ?? '-' }}</span></td>
                                        <td class="text-secondary"><em>"{{ $contact->pesan ?? $contact->message ?? '' }}"</em></td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('admin.dashboard', ['edit_id' => $contact->id]) }}" class="btn btn-warning btn-action text-dark">✏️ Edit</a>
                                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Apakah yakin ingin menghapus pesan ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-action text-white">🗑️ Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">Belum ada data pesan masuk di database phpMyAdmin.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>