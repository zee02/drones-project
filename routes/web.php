<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

// 1. ROTA RAIZ (Redireciona para o idioma da sessão)
Route::get('/', function () {
    // Obtém o 'locale' da sessão, ou usa 'pt' (o fallback default)
    $locale = Session::get('locale', Config::get('app.fallback_locale', 'pt'));
    
    // Redireciona para a rota 'home' com o prefixo do idioma
    return redirect()->route('home', ['locale' => $locale]);
})->name('root'); // Nomeie a rota raiz para referência.

// 2. ROTAS LOCALIZADAS (Onde o seu SetLocale Middleware atua)

Route::prefix('{locale}')

    ->whereIn('locale', ['en', 'pt']) 
    // Aplicamos o middleware aqui, se não estiver já no grupo 'web' do Kernel
    ->middleware(\App\Http\Middleware\SetLocale::class) 
    ->group(function () {
        
        Route::view('/', 'home')->name('home'); 
        Route::view('/solucoes', 'sub-pages.solucoes.solucoes')->name('solucoes');
        });