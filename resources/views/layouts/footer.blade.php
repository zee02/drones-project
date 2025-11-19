<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="footer-logo-link">
                            {{-- [TRADUZIDO] --}}
                            <img id="logo-footer" src="{{ asset('img/logo.png') }}" alt="{{ __('messages.footer.logo_alt') }}">
                        </a>
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="useful-links">
                    <div class="footer-heading">
                        {{-- [TRADUZIDO] --}}
                        <h4>{{ __('messages.footer.links_title') }}</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                {{-- [TRADUZIDO] --}}
                                <li><a href="#"><i
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_faq') }}</a></li>
                                <li><a href="#"><i
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_about') }}</a></li>
                                <li><a href="#"><i
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_suporte') }}</a></li>
                            </ul>
                        </div>


                        <div class="col-md-6">
                            <ul>
                                <li><a href="#"><i
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_partners') }}</a></li>
                                <li><a href="#"><i
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_politicas') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <div class="footer-heading">
                        {{-- [TRADUZIDO] --}}
                        <h4>{{ __('messages.footer.contact_title') }}</h4>
                    </div>
                    <ul>
                        {{-- [TRADUZIDO] --}}
                        <li><span>{{ __('messages.footer.contact_phone') }}</span><a href="#">+351925444425</a>
                        </li>
                        <li><span>{{ __('messages.footer.contact_email') }}</span><a href="#">comercial@vsferaone.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <p>{{ __('messages.footer.copyright', ['year' => '2025', 'company' => 'SkyDri']) }}
        - {{ __('messages.footer.design_by') }} <a rel="nofollow" href="https://www.linkedin.com/in/jos%C3%A9-fernandes-224123219/">José Fernandes</a></p>
</div>
