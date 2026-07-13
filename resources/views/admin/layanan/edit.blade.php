<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>Edit Layanan</h2>
    <form action="{{ route('admin.layanan.update', $layanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Icon (emoji)</label>
            <input type="text" name="icon" class="form-control" value="{{ $layanan->icon }}" placeholder="🎨">
        </div>
        <div class="mb-3">
            <label>Nama Layanan</label>
            <input type="text" name="nama" class="form-control" value="{{ $layanan->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $layanan->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Harga (angka saja, tanpa titik/Rp, contoh: 50000)</label>
            <input type="number" name="harga" class="form-control" value="{{ $layanan->harga }}" min="0" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.layanan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>