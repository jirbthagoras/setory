<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LoginPage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', LoginPage::class)->name('login-page');;
