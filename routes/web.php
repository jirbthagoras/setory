<?php

use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;
use App\Livewire\LoginPage;
use App\Livewire\RegisterPage;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::group(['middleware' => \App\Http\Middleware\OnlyGuestMiddleware::class], function () {
    Route::get('/login', LoginPage::class)->name('login-page');
    Route::get('/register', RegisterPage::class)->name('register-page');
});

Route::get('/community', \App\Livewire\CommunityPage::class)->name('community');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/tour', \App\Livewire\BuildingPage::class)
    ->name('tour');
Route::get('/culinary', \App\Livewire\CulinaryPage::class)
    ->name('culinary');
Route::get('/question/{subjectId}', \App\Livewire\QuestionPage::class)
    ->name('question');
Route::get('/subject/{id}', \App\Livewire\SubjectDetailPage::class)
    ->name('subject');

Route::get('/', HomePage::class)->name('home-page');
Route::get('/logout', function () {
    auth()->logout();
    return response()->redirectTo(\route('home-page'));
})->name('logout');
