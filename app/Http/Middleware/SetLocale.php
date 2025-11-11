<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 1. Obter o 'locale' a partir do parâmetro da URL (ex: /en/servicos)
        $locale = $request->route('locale');

        
        // 2. Verificar se o locale é válido (o 'whereIn' na rota já faz isto, mas é uma boa segurança)
        if (! in_array($locale, ['en', 'pt'])) {
            // Se o locale não for válido, podemos redirecionar para uma versão válida ou dar 404
            return abort(404);
        }

        // 3. Definir o idioma da aplicação para este pedido
        App::setLocale($locale);

        // 4. Guardar a escolha na sessão para "lembrar" da próxima vez
        Session::put('locale', $locale);

        // 5. [A MAGIA] Define o 'locale' como parâmetro padrão para todas as futuras rotas
        URL::defaults(['locale' => $locale]);

        // 6. Permitir que o pedido continue para o controlador/view
        return $next($request); 
    }
}