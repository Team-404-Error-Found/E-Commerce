<?php

use App\Livewire\Web\Cart\Cart;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', Cart::class)->name('cart');
