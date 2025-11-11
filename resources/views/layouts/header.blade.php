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
                
                <nav id="primary-nav" class="dropdown cf">
                    <ul class="dropdown menu">
                        <li><a href="#">{{ __('messages.nav.about') }}</a></li>
                        <li><a class="scrollTo" data-scrollTo="contact" href="#contact">{{ __('messages.nav.contact') }}</a></li>
                        <li><a class="scrollTo" data-scrollTo="blog" href="#blog">{{ __('messages.nav.gallery') }}</a></li>
                        <li><a class="scrollTo" data-scrollTo="services" href="#services">{{ __('messages.nav.example3') }}</a></li>
                        <li><a class="scrollTo" data-scrollTo="contact" href="#contact">{{ __('messages.nav.contact') }}</a></li>
                        
                        
                        @php
                            // Garante que a lógica só é executada se houver uma rota atual
                            if (Route::currentRouteName()) {
                                $currentRoute = Route::currentRouteName();
                                $params = Route::current()->parameters();
                            } else {
                                // Fallback se não houver rota (nunca deve acontecer se o middleware funcionou)
                                $currentRoute = 'home';
                                $params = ['locale' => app()->getLocale()];
                            }
                        @endphp
                        
                        <li id="lang-switcher">
                            <a href="#" id="lang-toggle">{{ __('messages.nav.translate') }}</a>
                            <ul class="submenu" id="lang-submenu">
                                <li>
                                    {{-- Gera URL para PT: mantém a rota atual, mas força o locale para 'pt' --}}
                                    <a href="{{ route($currentRoute, array_merge($params, ['locale' => 'pt'])) }}" >
                                        {{ __('messages.nav.portuguese') }}
                                    </a>
                                </li>
                                <li>
                                    {{-- Gera URL para EN: mantém a rota atual, mas força o locale para 'en' --}}
                                    <a href="{{ route($currentRoute, array_merge($params, ['locale' => 'en'])) }}">
                                        {{ __('messages.nav.english') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>