<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'profile'])->name('profile');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/generate', function () {
    $token = Str::random(32);
    return redirect()->route('signature', ['token' => $token]);
})->name('generate_signature_url');
Route::get('/signature', [HomeController::class, 'digital_signature'])->name('signature');
