<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button id="primary-nav-button" type="button"><?php echo e(__('messages.nav.menu')); ?></button>
                
                
                <a href="<?php echo e(route('home')); ?>"> 
                    <div class="logo">
                        
                        <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Venue Logo">
                    </div>
                </a>
                
                <nav id="primary-nav" class="dropdown cf">
                    <ul class="dropdown menu">
                        <li><a href="#"><?php echo e(__('messages.nav.about')); ?></a></li>
                        <li><a class="scrollTo" data-scrollTo="contact" href="#contact"><?php echo e(__('messages.nav.contact')); ?></a></li>
                        <li><a class="scrollTo" data-scrollTo="blog" href="#blog"><?php echo e(__('messages.nav.gallery')); ?></a></li>
                        <li><a class="scrollTo" data-scrollTo="services" href="#services"><?php echo e(__('messages.nav.example3')); ?></a></li>
                        <li><a class="scrollTo" data-scrollTo="contact" href="#contact"><?php echo e(__('messages.nav.contact')); ?></a></li>
                        
                        
                        <?php
                            // Garante que a lógica só é executada se houver uma rota atual
                            if (Route::currentRouteName()) {
                                $currentRoute = Route::currentRouteName();
                                $params = Route::current()->parameters();
                            } else {
                                // Fallback se não houver rota (nunca deve acontecer se o middleware funcionou)
                                $currentRoute = 'home';
                                $params = ['locale' => app()->getLocale()];
                            }
                        ?>
                        
                        <li id="lang-switcher">
                            <a href="#" id="lang-toggle"><?php echo e(__('messages.nav.translate')); ?></a>
                            <ul class="submenu" id="lang-submenu">
                                <li>
                                    
                                    <a href="<?php echo e(route($currentRoute, array_merge($params, ['locale' => 'pt']))); ?>" >
                                        <?php echo e(__('messages.nav.portuguese')); ?>

                                    </a>
                                </li>
                                <li>
                                    
                                    <a href="<?php echo e(route($currentRoute, array_merge($params, ['locale' => 'en']))); ?>">
                                        <?php echo e(__('messages.nav.english')); ?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header><?php /**PATH B:\Projetos\website\drones-project\resources\views\layouts\header.blade.php ENDPATH**/ ?>