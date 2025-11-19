@extends('layouts.app')

@section('content')
    {{-- SECÇÃO HERO --}}
    <section class="hero hero--solucoes" style="--hero-bg-image: url('{{ asset('img/solucoes2-img.jpg') }}');">
        <div class="hero__content">
            {{-- CHAVE ADICIONAL NECESSÁRIA: 'messages.solucoes_title' --}}
            <p class="hero__eyebrow">{{ __('messages.nav.solucoes') }} SkyDri</p>

            <h1 class="hero__title">
                {{-- CHAVE ADICIONAL NECESSÁRIA: 'messages.solucoes_header' --}}
                {{ __('messages.hero.solucoes_header') ?? 'Diversas soluções à sua medida' }}
            </h1>

            <a href="#solucoes-detalhes" class="btn btn-primary hero__cta" data-scroll="#solucoes-detalhes">
                {{-- CHAVE ADICIONAL NECESSÁRIA: 'messages.contact.specialist_button' --}}
                {{ __('messages.contact.specialist_button') ?? 'Falar com um especialista' }}
            </a>
        </div>
    </section>

    {{-- SECÇÃO DE GRELHA DE SETORES --}}
    <section id="solucoes-setores" class="solucoes-grid-section">
        <div class="container">
            <div class="row justify-content-center">

                {{-- TRADUÇÃO: Usa messages.services.title --}}
                <h2 id="solucoes-titulo" class="solucoes-grid-title">{{ __('messages.services.title') }}</h2>

            </div>

            <div class="row">

                {{-- Array dos 6 setores a serem exibidos (INVARIANTE) --}}
                @php
                    $sectors = [
                        ['key' => 'item1', 'icon' => 'fa-leaf', 'bg_id' => 'agro'],
                        ['key' => 'item2', 'icon' => 'fa-bolt', 'bg_id' => 'energy'],
                        ['key' => 'item3', 'icon' => 'fa-building', 'bg_id' => 'construction'],
                        ['key' => 'item4', 'icon' => 'fa-industry', 'bg_id' => 'industry'],
                        ['key' => 'item5', 'icon' => 'fa-life-ring', 'bg_id' => 'gov'],
                        ['key' => 'item6', 'icon' => 'fa-hammer', 'bg_id' => 'custom'],
                    ];
                @endphp

                @foreach($sectors as $index => $sector)
                    @php
                        $isLastItem = ($index === count($sectors) - 1);
                        // Centralizar o 6º item na linha se houver 6
                        $offsetClass = ($isLastItem && count($sectors) % 3 === 0 && count($sectors) === 6) ? 'offset-md-4' : '';

                        // O Slug do URL DEVE ser traduzido (Inovação e Precisão)
                        // A slug é gerada a partir da tradução do título (ex: Agricultura & Floresta -> agriculture-forestry)
                        $translatedTitle = __('messages.services.' . $sector['key'] . '_title');
                        $urlSlug = strtolower(str_replace([' & ', ' ', ' / '], ['-', '-', '-'], $translatedTitle));
                    @endphp

                    <div class="col-lg-4 col-md-6 {{ $offsetClass }} setor-card-wrapper">

                        {{-- TRADUÇÃO: O URL usa a slug da tradução do título --}}
                        <a href="{{ url('/solucoes/' . $urlSlug) }}" class="setor-card" data-bg-id="{{ $sector['bg_id'] }}">

                            {{-- Imagem de Fundo e Overlay --}}
                            <div class="card-bg-overlay"></div>
                            <div class="card-bg-image"
                                style="background-image: url('{{ asset('img/sectors/' . $sector['bg_id'] . '.jpg') }}');"></div>

                            {{-- Conteúdo do Cartão --}}
                            <div class="card-content-wrap">
                                <div class="card-icon">
                                    <i class="fa {{ $sector['icon'] }}"></i>
                                </div>
                                {{-- TRADUÇÃO: Título do Serviço --}}
                                <h3 class="card-title-heading">{{ __('messages.services.' . $sector['key'] . '_title') }}</h3>
                                {{-- TRADUÇÃO: Descrição do Serviço --}}
                                <p class="card-description">{{ __('messages.services.' . $sector['key'] . '_desc') }}</p>
                                {{-- TRADUÇÃO: Botão Detalhes --}}
                                <span class="card-cta-link">{{ __('messages.products.detalhes_btn') }} &rarr;</span>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            {{-- BLOCO COMO TRABALHAMOS (TIMELINE) --}}
            <div class="row pt-5 mt-5 border-top-soft">
                <div class="col-md-12">
                    <h2 id="solucoes-titulo2" class="text-center mb-5">{{ __('messages.about_us.how_we_work_title') }}</h2>
                    <div class="how-we-work-timeline">
                        {{-- LINHA SUPERIOR DA TIMELINE --}}
                        <div class="timeline-horizontal-line timeline-horizontal-line"></div>

                        @php
                            $steps = [
                                __('messages.about_us.step1'),
                                __('messages.about_us.step2'),
                                __('messages.about_us.step3'),
                                __('messages.about_us.step4')
                            ];
                        @endphp

                        @foreach($steps as $index => $step)
                            <div class="timeline-step" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                                <div class="step-number">{{ $index + 1 }}</div>
                                <h3 class="step-title">{{ $step }}</h3>

                                {{-- Adicionar seta apenas se não for o último passo --}}
                                @if (!$loop->last)
                                    <div class="timeline-arrow"></div>
                                @endif
                            </div>
                        @endforeach

                        {{-- LINHA INFERIOR DA TIMELINE --}}
                        <div class="timeline-horizontal-line bottom-line"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection