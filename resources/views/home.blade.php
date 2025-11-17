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
                        <h2>Junte-se à Nossa Comunidade</h2>
                        <div class="community-features">
                            <div class="feature-item">
                                <h4>Encontros Mensais de Voo</h4>
                                <p>Partilhe experiências com outros pilotos e entusiastas de drones.</p>
                            </div>
                            <div class="feature-item">
                                <h4>Apoio ao Curso de Piloto</h4>
                                <p>Suporte completo para certificação e desenvolvimento de competências.</p>
                            </div>
                        </div>
                        <a href="#" class="btn-community">Juntar-me à Comunidade</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907"
                width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="wrapper">
                    <div class="section-heading">
                        <span>{{ __('messages.contact.title') }}</span>
                        <h2>{{ __('messages.contact.subtitle_lorem') }}</h2> {{-- Texto Lorem Ipsum de Exemplo --}}
                    </div>
                    <button id="modBtn" class="modal-btn">{{ __('messages.contact.talk_button') }}</button>
                </div>
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <div class="close fa fa-close"></div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="left-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="section-heading">
                                                <span>{{ __('messages.modal.title') }}</span>
                                                <h2>{{ __('messages.modal.subtitle') }}</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset><input name="name" type="text" class="form-control"
                                                    id="name"
                                                    placeholder="{{ __('messages.form.name_placeholder') }}"
                                                    required=""></fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset><input name="subject" type="text" class="form-control"
                                                    id="subject"
                                                    placeholder="{{ __('messages.modal.subject_placeholder') }}"
                                                    required=""></fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" class="form-control" id="message"
                                                    placeholder="{{ __('messages.modal.message_placeholder') }}" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset><button type="submit" id="form-submit"
                                                    class="btn">{{ __('messages.modal.send_button') }}</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="right-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="content">
                                                <div class="section-heading">
                                                    <span>{{ __('messages.modal.about_title') }}</span>
                                                    <h2>{{ __('messages.modal.about_subtitle') }}</h2>
                                                </div>
                                                <p>{{ __('messages.modal.about_text_lorem') }}</p> {{-- Texto Lorem Ipsum de Exemplo --}}
                                                <ul>
                                                    <li><span>{{ __('messages.modal.phone') }}</span><a
                                                            href="#">010-050-0550</a></li>
                                                    <li><span>{{ __('messages.modal.email') }}</span><a
                                                            href="#">hi@company.co</a></li>
                                                    <li><span>{{ __('messages.modal.address') }}</span><a
                                                            href="#">company.co</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
