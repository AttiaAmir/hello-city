<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages/home');
})->name('home');

Route::get('/abous-us', fn() => view('pages/about')) ->name('about');

// ou 
// Route::view('/about-us','pages/about')->name('about');




