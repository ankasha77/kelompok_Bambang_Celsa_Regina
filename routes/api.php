<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;

Route::get('/layanan', [LayananController::class, 'apiIndex']);