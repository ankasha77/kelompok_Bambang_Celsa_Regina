<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
