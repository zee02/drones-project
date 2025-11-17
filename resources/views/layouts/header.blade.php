<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button id="primary-nav-button" type="button">{{ __('messages.nav.menu') }}</button>

                {{-- FIX: O link do logo deve apontar para a rota 'home', usando o locale atual --}}
                <a href="{{ route('home') }}">
                    <div class="logo">
                        {{-- [TRADUZIDO] O Alt Text --}}
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

                <nav id="primary-nav" class="dropdown cf">
                    <ul class="dropdown menu">
                        <li><a href="#">{{ __('messages.nav.solucoes') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.produtos') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.servicos') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.comunidade') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.suporte') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.ondecomprar') }}</a></li>

                        <li id="lang-switcher">
                        
                            <a href="{{ route($currentRoute, array_merge($params, ['locale' => $targetLocale])) }}"
                                title="Mudar para {{ $targetText }}">
                                {{ $targetText }}
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
