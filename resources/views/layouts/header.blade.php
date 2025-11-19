<header id="header">
    {{-- O CONTAINER é o PAI FLEXBOX --}}
    <div class="container">
        
        {{-- Botão Hamburger (Escondido em Desktop) --}}
        <button id="primary-nav-button" type="button">{{ __('messages.nav.menu') }}</button>

        {{-- 1. Logo (Filho direto do container) --}}
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="header-logo-link">
            <div class="logo">
                {{-- A Imagem será dimensionada pelo CSS (max-height) --}}
                <img src="{{ asset('img/logo.png') }}" alt="Venue Logo">
            </div>
        </a>

        @php
            $currentLocale = app()->getLocale();
            $targetLocale = $currentLocale === 'pt' ? 'en' : 'pt';
            $targetText = $currentLocale === 'pt' ? __('messages.nav.english') : __('messages.nav.portuguese');

            $currentRoute = Route::currentRouteName() ?: 'home';
            $params = Route::current() ? Route::current()->parameters() : ['locale' => $currentLocale];
        @endphp

        {{-- 2. Navegação Principal (Filho direto do container - Empurrado para a direita) --}}
        <nav id="primary-nav" class="dropdown cf">
            <ul class="dropdown menu">
                <li><a href="{{ route("solucoes", array_merge($params, ['locale' => $currentLocale])) }}">{{ __('messages.nav.solucoes') }}</a></li>
                <li><a href="#">{{ __('messages.nav.produtos') }}</a></li>
                <li><a href="#">{{ __('messages.nav.servicos') }}</a></li>
                <li><a href="#">{{ __('messages.nav.comunidade') }}</a></li>
                <li><a href="#">{{ __('messages.nav.suporte') }}</a></li>
                <li><a href="#">{{ __('messages.nav.ondecomprar') }}</a></li>

                {{-- Language Switcher --}}
                <li id="lang-switcher">
                    {{-- O idioma muda APENAS no parâmetro do URL, mantendo a rota atual --}}
                    <a href="{{ route($currentRoute, array_merge($params, ['locale' => $targetLocale])) }}"
                        title="Mudar para {{ $targetText }}">
                        {{ $targetText }}
                    </a>
                </li>
            </ul>
        </nav>
        
    </div>
</header>