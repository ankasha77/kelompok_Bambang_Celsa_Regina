<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Route Halaman Utama (Dipaksa langsung ke halaman Login)
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::post('/pesanan', [PesananController::class, 'store'])->name('pesanan.store');

// 2. Route Fitur Lengkap CRUD Kontak (Terhubung ke MySQL phpMyAdmin)
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

// 3. Route Dashboard & Profile (Diubah agar langsung menampilkan halaman HOME Kelompok 9)
Route::get('/dashboard', function () {
    return view('home'); // Mengarahkan user biasa langsung ke tampilan Home utama
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// 4. Route Khusus Admin Panel kelompok 9 (Terlindungi oleh Middleware Admin & Menarik Data Database)
Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('/admin/dashboard', function () {
        // Mengambil semua data dari tabel kontak di database
        $all_contacts = \App\Models\Contact::all(); 
        
        // Mengirimkan variabel data tersebut ke halaman blade admin
        return view('admin.dashboard', compact('all_contacts')); 
    })->name('admin.dashboard');

    // CRUD Layanan khusus Admin
    Route::get('/admin/layanan', [LayananController::class, 'adminIndex'])->name('admin.layanan.index');
    Route::get('/admin/layanan/create', [LayananController::class, 'create'])->name('admin.layanan.create');
    Route::post('/admin/layanan', [LayananController::class, 'store'])->name('admin.layanan.store');
    Route::get('/admin/layanan/{id}/edit', [LayananController::class, 'edit'])->name('admin.layanan.edit');
    Route::put('/admin/layanan/{id}', [LayananController::class, 'update'])->name('admin.layanan.update');
    Route::delete('/admin/layanan/{id}', [LayananController::class, 'destroy'])->name('admin.layanan.destroy');

    // CRUD Pesanan khusus Admin
    Route::get('/admin/pesanan', [PesananController::class, 'adminIndex'])->name('admin.pesanan.index');
    Route::put('/admin/pesanan/{id}/status', [PesananController::class, 'updateStatus'])->name('admin.pesanan.updateStatus');
    Route::delete('/admin/pesanan/{id}', [PesananController::class, 'destroy'])->name('admin.pesanan.destroy');

});

// 5. Jalur kilat logout tanpa perlu token form (Solusi Error 419)
Route::get('/logout-cepat', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout.cepat');