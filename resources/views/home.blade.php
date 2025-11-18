@extends('layouts.app')

@section('content')
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <img src="{{ asset('img/drone_gif.gif') }}" alt="{{ __('messages.banner.drone_alt') }}"
                            class="drone-overlay">
                        <div class="line-dec"></div>
                        <h2>SkyDri</h2>
                        <span>{{ __('messages.banner.subtitle') }}</span>
                        <div class="blue-button">
                            <a class="scrollTo" data-scrollTo="popular"
                                href="#">{{ __('messages.banner.discover_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-places" id="produtos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        {{-- Cabeçalho principal para Produtos em destaque --}}
                        <h2>{{ __('messages.products.title') }}</h2>
                    </div>
                </div>
            </div>

            {{-- INÍCIO DO CAROUSEL DE PRODUTOS --}}
            <h3 class="carousel-subtitle">{{ __('messages.products.subtitle') }}</h3>
            <div class="owl-carousel owl-theme">

                {{-- LINHA 1: DRONES PROFISSIONAIS (DJI Enterprise / Spider PT) --}}

                <div class="item popular-item">
                    <div class="thumb">
                        {{-- Imagem Exemplo 1: Drone Profissional --}}
                        <img src="{{ asset('img/produtos/drone1.jpg') }}" alt="DJI Enterprise Drone">
                        <div class="text-content">
                            <h4>{{ __('messages.products.pro_title') }}</h4>
                            <span>{{ __('messages.products.pro_tag') }} - {{ __('messages.popular.listings') }}</span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>

                <div class="item popular-item">
                    <div class="thumb">
                        {{-- Imagem Exemplo 2: Drone Profissional --}}
                        <img src="{{ asset('img/produtos/drone2.jpg') }}" alt="Drone Matrice">
                        <div class="text-content">
                            <h4>Spider PT</h4>
                            <span>{{ __('messages.products.pro_tag') }} - 18 {{ __('messages.popular.listings') }}</span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>

                {{-- LINHA 2: DJI CONSUMO/COMERCIAL (Mini, Air, Mavic) --}}

                <div class="item popular-item">
                    <div class="thumb">
                        {{-- Imagem Exemplo 3: Drone de Consumo --}}
                        <img src="{{ asset('img/produtos/drone3.jpg') }}" alt="DJI Mavic Drone">
                        <div class="text-content">
                            <h4>{{ __('messages.products.consumer_title') }}</h4>
                            {{-- Etiqueta de Consumo --}}
                            <span
                                style="font-weight: bold; color: var(--color-primary-light);">{{ __('messages.products.criadores_entusiastas') }}</span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="popular-places" id="produtos2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        {{-- Cabeçalho principal para Produtos em destaque --}}
                        <h2>{{ __('messages.products2.title') }}</h2>
                    </div>
                </div>
            </div>

            {{-- INÍCIO DO CAROUSEL DE PRODUTOS --}}
            <h3 class="carousel-subtitle">{{ __('messages.products.subtitle') }}</h3>
            <div class="owl-carousel owl-theme">

                {{-- LINHA 1: DRONES PROFISSIONAIS (DJI Enterprise / Spider PT) --}}

                <div class="item popular-item">
                    <div class="thumb">
                        {{-- Imagem Exemplo 1: Drone Profissional --}}
                        <img src="{{ asset('img/produtos/drone1.jpg') }}" alt="DJI Enterprise Drone">
                        <div class="text-content">
                            <h4>{{ __('messages.products.pro_title') }}</h4>
                            <span>{{ __('messages.products.pro_tag') }} - {{ __('messages.popular.listings') }}</span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>

                <div class="item popular-item">
                    <div class="thumb">
                        {{-- Imagem Exemplo 2: Drone Profissional --}}
                        <img src="{{ asset('img/produtos/drone2.jpg') }}" alt="Drone Matrice">
                        <div class="text-content">
                            <h4>Spider PT</h4>
                            <span>{{ __('messages.products.pro_tag') }} - 18 {{ __('messages.popular.listings') }}</span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>

                {{-- LINHA 2: DJI CONSUMO/COMERCIAL (Mini, Air, Mavic) --}}

                <div class="item popular-item">
                    <div class="thumb">
                        {{-- Imagem Exemplo 3: Drone de Consumo --}}
                        <img src="{{ asset('img/produtos/drone3.jpg') }}" alt="DJI Mavic Drone">
                        <div class="text-content">
                            <h4>{{ __('messages.products.consumer_title') }}</h4>
                            {{-- Etiqueta de Consumo --}}
                            <span
                                style="font-weight: bold; color: var(--color-primary-light);">{{ __('messages.products.criadores_entusiastas') }}</span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        {{-- Títulos de Secção --}}
                        <h2>{{ __('messages.services.title') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('img/service_icon_1.png') }}" alt="Design">
                        </div>
                        <h4>{{ __('messages.services.item1_title') }}</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('img/service_icon_2.png') }}" alt="Customizável">
                        </div>
                        <h4>{{ __('messages.services.item2_title') }}</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('img/service_icon_3.png') }}" alt="Serviço">
                        </div>
                        <h4>{{ __('messages.services.item3_title') }}</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('img/service_icon_4.png') }}" alt="Item 4">
                        </div>
                        <h4>{{ __('messages.services.item4_title') }}</h4>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('img/service_icon_5.png') }}" alt="Item 5">
                        </div>
                        <h4>{{ __('messages.services.item5_title') }}</h4>
                    </div>
                </div>

            </div>

            <div class="row down-services">
            </div>
        </div>
    </section>


    <section class="community-section" id="community">
        <div class="community-bg" style="background-image: url('{{ asset('img/comunidade.jpg') }}')"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="community-content">
                        <h2>{{ __('messages.community.title') }}</h2>
                        <div class="community-features">
                            <div class="feature-item">
                                <h4>{{ __('messages.community.feature1_title') }}</h4>
                                <p>{{ __('messages.community.feature1_text') }}</p>
                            </div>
                            <div class="feature-item">
                                <h4>{{ __('messages.community.feature2_title') }}</h4>
                                <p>{{ __('messages.community.feature2_text') }}</p>
                            </div>
                        </div>
                        <a href="#" class="btn-community">{{ __('messages.community.cta_button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="wrapper">
                    <div class="section-heading">
                        <span>{{ __('messages.contact.title') }}</span>
                        <h2>{{ __('messages.contact.subtitle_lorem') }}</h2> {{-- Texto Lorem Ipsum de Exemplo --}}
                    </div>
                    <button id="modBtn" class="modal-btn">{{ __('messages.contact.talk_button') }}</button>
                </div>
            </div>
        </div>
    </section>
@endsection
