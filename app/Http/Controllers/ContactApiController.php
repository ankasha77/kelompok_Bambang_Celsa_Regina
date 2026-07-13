<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactApiController extends Controller
{
    // Menampilkan halaman utama kontak dan daftar tabel pesan (Read)
    public function index()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    // Memproses data inputan baru ke MySQL (Create)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return response()->json(['message' => 'Pesan berhasil dikirim ke database! 🚀'], 201);
    }

    // Mengambil data lama berdasarkan ID untuk ditaruh di Form (Edit)
    public function edit($id)
    {
        $contactToEdit = Contact::findOrFail($id);
        $contacts = Contact::all(); // Tetap panggil semua data agar tabel di bawah tidak hilang
        
        // JIKA YANG EDIT ADALAH ADMIN, kita buatkan view form edit khusus admin / menimpa ke halaman depan
        return view('contact', compact('contacts', 'contactToEdit'));
    }

    // Memproses perubahan data dari form edit ke MySQL (Update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        // LOGIKA PENGALIHAN: Jika admin yang update, balikan ke Admin Panel
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard')->with('success', 'Data pesan berhasil diperbarui oleh Admin Kelompok 9! ✏️');
        }

        return redirect('/contact')->with('success', 'Pesan berhasil diperbarui di database! ✏️');
    }

    // Menghapus baris data dari MySQL (Delete)
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // LOGIKA PENGALIHAN: Jika admin yang menghapus, balikan ke Admin Panel
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard')->with('success', 'Data pesan berhasil dihapus dari database oleh Admin! 🗑️');
        }

        return redirect('/contact')->with('success', 'Pesan berhasil dihapus dari database! 🗑️');
    }
}
