<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Halaman publik (user) — cuma nampilin halaman, datanya diambil via fetch API
    public function index()
    {
        return view('layanan');
    }

    // API — dipanggil fetch() dari halaman user (layanan.blade.php)
    public function apiIndex()
    {
        return response()->json(Layanan::all());
    }

    // ==== ADMIN CRUD ====

    // Tampilkan semua layanan di panel admin
    public function adminIndex()
    {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }

    // Tampilkan form tambah layanan
    public function create()
    {
        return view('admin.layanan.create');
    }

    // Simpan layanan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|string|max:100',
            'icon' => 'nullable|string|max:10',
        ]);

        $data = $request->all();
        if (empty($data['icon'])) {
            $data['icon'] = '🛠️';
        }

        Layanan::create($data);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Tampilkan form edit layanan
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.layanan.edit', compact('layanan'));
    }

    // Update layanan yang sudah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|string|max:100',
            'icon' => 'nullable|string|max:10',
        ]);

        $data = $request->all();
        if (empty($data['icon'])) {
            $data['icon'] = '🛠️';
        }

        $layanan = Layanan::findOrFail($id);
        $layanan->update($data);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diupdate.');
    }

    // Hapus layanan
    public function destroy($id)
    {
        Layanan::findOrFail($id)->delete();

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}