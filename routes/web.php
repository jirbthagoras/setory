<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserLogin;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', UserLogin::class)->name('login-page');
