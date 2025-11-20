@extends('layouts.app')

@section('content')

    <main>
        
        <section id="hero" class="hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                {{-- TRADUÇÃO: Título do Hero --}}
                <h1>{{ __('messages.servicos_page.hero_title_p1') }} <strong>{{ __('messages.servicos_page.hero_title_p2') }}</strong>, {{ __('messages.servicos_page.hero_title_p3') }}</h1>
                
                {{-- TRADUÇÃO: Botão do Hero --}}
                <a href="{{ route('solucoes', ['locale' => app()->getLocale()]) }}" class="cta-button">{{ __('messages.servicos_page.hero_cta') }}</a>
            </div>
        </section>

        <section id="pilares" class="pillars-section">
            {{-- TRADUÇÃO: Título da Secção --}}
            <h2>{{ __('messages.servicos_page.pillars_title') }}</h2>
            <div class="pillar-grid">
                
                {{-- PILAR 1: Consultoria & Projeto --}}
                <div class="pillar-card fade-in" data-delay="0">
                    <div class="card-image-wrapper">
                         <img src="{{ asset('img/servicos/consultoria.jpg') }}" alt="Pessoas a planear um mapa digital com um drone no fundo">
                    </div>
                    <div class="card-content">
                        <i class="fas fa-lightbulb icon-primary"></i>
                        <h3>{{ __('messages.servicos_page.pilar1_title') }}</h3>
                        <ul class="service-list">
                            <li><i class="fas fa-check-circle"></i> {{ __('messages.servicos_page.pilar1_item1') }}</li>
                            <li><i class="fas fa-check-circle"></i> {{ __('messages.servicos_page.pilar1_item2') }}</li>
                        </ul>
                    </div>
                </div>

                {{-- PILAR 2: Formação & Certificação --}}
                <div class="pillar-card fade-in" data-delay="1">
                    <div class="card-image-wrapper">
                         <img src="{{ asset('img/servicos/formacao.jpg') }}" alt="Piloto de drone a receber formação em segurança">
                    </div>
                    <div class="card-content">
                        <i class="fas fa-user-graduate icon-primary"></i>
                        <h3>{{ __('messages.servicos_page.pilar2_title') }}</h3>
                        <ul class="service-list">
                            <li><i class="fas fa-check-circle"></i> {{ __('messages.servicos_page.pilar2_item1') }}</li>
                            <li><i class="fas fa-check-circle"></i> {{ __('messages.servicos_page.pilar2_item2') }}</li>
                        </ul>
                    </div>
                </div>

                {{-- PILAR 3: Manutenção & Suporte --}}
                <div class="pillar-card fade-in" data-delay="2">
                    <div class="card-image-wrapper">
                         <img src="{{ asset('img/servicos/manutencao.jpg') }}" alt="Técnico a inspecionar um drone em manutenção">
                    </div>
                    <div class="card-content">
                        <i class="fas fa-tools icon-primary"></i>
                        <h3>{{ __('messages.servicos_page.pilar3_title') }}</h3>
                        <ul class="service-list">
                            <li><i class="fas fa-check-circle"></i> {{ __('messages.servicos_page.pilar3_item1') }}</li>
                            <li><i class="fas fa-check-circle"></i> {{ __('messages.servicos_page.pilar3_item2') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta-final" class="cta-section">
            <div class="cta-content">
                {{-- TRADUÇÃO: Título e Subtítulo do CTA --}}
                <h2>{{ __('messages.servicos_page.cta_title') }}</h2>
                <p class="p-servicos">{{ __('messages.servicos_page.cta_subtitle') }}</p>
                
                {{-- TRADUÇÃO: Botão CTA Final --}}
                <a href="" class="cta-button secondary-button">{{ __('messages.servicos_page.cta_button') }}</a>
            </div>
        </section>

    </main>

@endsection

@push('styles')
    {{-- LIGAÇÃO AO FICHEIRO CSS DEDICADO --}}
    <link rel="stylesheet" href="{{ asset('css/servicos/servicos.css') }}">
@endpush

@push('scripts')
    {{-- LIGAÇÃO AO FICHEIRO JS DEDICADO --}}
    <script src="{{ asset('js/servicos/servicos.js') }}"></script>
@endpush