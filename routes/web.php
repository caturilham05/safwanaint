<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

Route::group([
	'prefix'     => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]	
], function()
{
	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::get('/about-us', [HomeController::class, 'profile'])->name('profile');
	Route::get('/service', [HomeController::class, 'service'])->name('service');
	Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
	Route::get('/apply', [HomeController::class, 'apply'])->name('apply');
});

Route::get('/signature/{token}', [HomeController::class, 'digital_signature'])->name('signature');
Route::get('/send-email',function(){
    $data = [
        'name' => 'Syahrizal As',
        'body' => 'Testing Kirim Email di Santri Koding'
    ];
   
    Mail::to('caturilham05@gmail.com')->send(new SendEmail($data));
   
    dd("Email Berhasil dikirim.");
});