<?php

use Illuminate\Support\Facades\Route;

// Redireciona /home para a página inicial (/)
Route::redirect('/home', '/');

// Home Page
Route::view('/', 'home')->name('home');

// Páginas estáticas (usando Route::view para simplicidade)
Route::view('/a-empresa', 'about')->name('about');
Route::view('/servicos', 'services')->name('services');
Route::view('/frota', 'fleet')->name('fleet');
Route::view('/contacto', 'contact')->name('contact');