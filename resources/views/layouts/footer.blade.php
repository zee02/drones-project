<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        {{-- [TRADUZIDO] --}}
                        <img src="{{ asset('img/footer_logo.png') }}" alt="{{ __('messages.footer.logo_alt') }}">
                    </div>
                    {{-- [TRADUZIDO] (Substituir este texto lorem ipsum nos lang files) --}}
                    <p>{{ __('messages.footer.about_lorem') }}</p>
                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
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
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_partners') }}</a></li>
                                <li><a href="#"><i
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_suporte') }}</a></li>
                            </ul>
                        </div>


                        <div class="col-md-6">
                            <ul>
                                {{-- [TRADUZIDO] --}}
                                <li><a href="#"><i
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_partners') }}</a></li>
                                <li><a href="#"><i
                                            class="fa fa-stop"></i>{{ __('messages.footer.links_suporte') }}</a></li>
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
                    {{-- [TRADUZIDO] (Substituir este texto lorem ipsum nos lang files) --}}
                    <p>{{ __('messages.footer.contact_lorem') }}</p>
                    <ul>
                        {{-- [TRADUZIDO] --}}
                        <li><span>{{ __('messages.footer.contact_phone') }}</span><a href="#">010-050-0550</a>
                        </li>
                        <li><span>{{ __('messages.footer.contact_email') }}</span><a href="#">hi@company.co</a>
                        </li>
                        <li><span>{{ __('messages.footer.contact_address') }}</span><a href="#">company.co</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <p>{{ __('messages.footer.copyright', ['year' => '2018', 'company' => 'Company Name']) }}
        - {{ __('messages.footer.design_by') }} <a rel="nofollow" href="http://www.templatemo.com">Template Mo</a></p>
</div>
