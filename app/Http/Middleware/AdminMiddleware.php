<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah pengguna sudah login
        // 2. Cek apakah role pengguna adalah 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Izinkan masuk ke halaman admin
        }

        // Jika bukan admin, tendang ke halaman dashboard biasa dengan pesan peringatan
        return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki hak akses admin.');
    }
}
