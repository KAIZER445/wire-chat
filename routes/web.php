<?php

use App\Livewire\ChatConnections;
use App\Livewire\Dashboard;
use App\Livewire\LandingPage;
use App\Livewire\Login;
use App\Livewire\Logout;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('landing'));
});

route::get('/landing', LandingPage::class)->name('landing');
route::get('/login',Login::class)->name('login');

Route::prefix('/dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
});

Route::get('/logout', Logout::class)->name('logout');