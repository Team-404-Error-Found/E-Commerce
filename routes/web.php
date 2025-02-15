<?php

use App\Livewire\Web\Cart\Cart;
use App\Livewire\Web\Login\Login;
use App\Livewire\Web\Signup\Signup;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', Cart::class)->name('cart');
Route::get('/login',Login::class)->name('login');
Route::get('/signup', Signup::class)->name('signup');
