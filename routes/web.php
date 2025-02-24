<?php

use App\Livewire\LandingPage;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('landing'));
});

route::get('/landing', LandingPage::class)->name('landing');
route::get('/login',Login::class)->name('login');