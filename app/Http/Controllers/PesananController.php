<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // User submit order
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:20',
            'layanan_nama' => 'required|string|max:255',
            'catatan' => 'nullable|string',
        ]);

        Pesanan::create($request->all());

        return redirect()->route('layanan')->with('success', 'Pesanan berhasil dikirim! Kami akan segera menghubungi kamu.');
    }

    // Admin lihat semua pesanan
    public function adminIndex()
    {
        $pesanans = Pesanan::latest()->get();
        return view('admin.pesanan.index', compact('pesanans'));
    }

    // Admin update status pesanan
    public function updateStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|string']);

        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update(['status' => $request->status]);

        return redirect()->route('admin.pesanan.index')->with('success', 'Status pesanan berhasil diupdate.');
    }

    // Admin hapus pesanan
    public function destroy($id)
    {
        Pesanan::findOrFail($id)->delete();
        return redirect()->route('admin.pesanan.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}