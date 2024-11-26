<?php

use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;
use App\Livewire\LoginPage;
use App\Livewire\RegisterPage;

Route::group(['middleware' => \App\Http\Middleware\OnlyGuestMiddleware::class], function () {
    Route::get('/login', LoginPage::class)->name('login-page');
    Route::get('/register', RegisterPage::class)->name('register-page');
});

Route::get('/', HomePage::class)->name('home-page');
Route::get('/logout', function () {
    auth()->logout();
    return response()->redirectTo(\route('home-page'));
})->name('logout');
