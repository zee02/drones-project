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
        Route::view('/solucoes/agricultura-floresta', 'sub-pages.setores.agricultura')->name('agricultura-floresta');
        Route::view('/solucoes/energia-utilities', 'sub-pages.setores.energia')->name('energia-utilities');
        Route::view('/solucoes/construcao-infraestruturas', 'sub-pages.setores.construcao')->name('construção-infraestruturas');
        Route::view('/solucoes/industria-facilities', 'sub-pages.setores.industria')->name('indústria-facilities');
        Route::view('/solucoes/governo-protecao-civil', 'sub-pages.setores.governo')->name('governo-proteção-civil');
        Route::view('/solucoes/projetos-a-medida', 'sub-pages.setores.custom')->name('projetos-à-medida');
        Route::view('/servicos', 'sub-pages.servicos')->name('servicos');

    });