<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Muda o idioma da aplicação e guarda na sessão.
     */
    public function switchLang($locale)
{
        $availableLocales = ['en', 'pt'];
        
        if (in_array($locale, $availableLocales)) {
            Session::put('locale', $locale);
            
            App::setLocale($locale);
        }

        return redirect()->back();
    }
}