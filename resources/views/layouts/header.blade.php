<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button id="primary-nav-button" type="button">Menu</button>
                <a href="{{ url('/') }}">
                    <div class="logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Venue Logo">
                    </div>
                </a>
                <nav id="primary-nav" class="dropdown cf">
                    <ul class="dropdown menu">
                        <li class='active'><a href="#">Sobre nós</a></li>
                        <li><a href="#">Exemplo2</a>
                          
                        </li>
                        <li><a class="scrollTo" data-scrollTo="blog" href="#blog">Galeria</a></li>
                        <li><a class="scrollTo" data-scrollTo="services" href="#services">Exemplo3</a></li>
                        <li><a class="scrollTo" data-scrollTo="contact" href="#contact">Contacta-nos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>