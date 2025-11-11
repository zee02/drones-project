<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route; 


class AppServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        // VERIFIQUE SE O CÓDIGO ESTÁ EXATAMENTE AQUI:
        if (! function_exists('localized_route')) {
            function localized_route(string $locale): string
            {
                if (! Route::current()) { 
                    return url('/' . $locale); 
                }

                $routeName = Route::currentRouteName();
                $params = Route::current()->parameters();
                $params['locale'] = $locale;
        
                try {
                    return route($routeName, $params);
                } catch (\Exception $e) {
                    return url('/' . $locale); 
                }
            }
        }
    }
}