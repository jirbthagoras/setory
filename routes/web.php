<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LoginPage;
use App\Livewire\RegisterPage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', LoginPage::class)->name('login-page');;
Route::get('/register', RegisterPage::class)->name('register-page');;
