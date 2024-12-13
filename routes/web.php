<?php

use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;
use App\Livewire\LoginPage;
use App\Livewire\RegisterPage;

Route::middleware(['isGuest'])->group(function () {
    Route::get('/login', LoginPage::class)->name('login-page');
    Route::get('/register', RegisterPage::class)->name('register-page');
});

Route::middleware(['isUser'])->group(function () {
    Route::get('/community', \App\Livewire\CommunityPage::class)->name('community-page');
    Route::get('/quiz/{subject_id}', \App\Livewire\QuestionPage::class)
        ->name('quiz-page');
//        ->middleware('checkRedirect');
    Route::get('/start-quiz/{subject_id}', \App\Livewire\StartQuizPage::class)
        ->name('start-quiz');
});

Route::get('/tour', \App\Livewire\BuildingPage::class)
    ->name('tour');
Route::get('/culinary', \App\Livewire\CulinaryPage::class)
    ->name('culinary');
Route::get('/subject/{id}', \App\Livewire\SubjectDetailPage::class)
    ->name('subject');

Route::get('/', HomePage::class)->name('home-page');
Route::get('/logout', function () {
    auth()->logout();
    return response()->redirectTo(\route('home-page'));
})->name('logout');

Route::fallback(function () {
    return response()->view("not-found");
})->name("not-found");
