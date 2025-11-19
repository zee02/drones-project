<header id="header">
    
    <div class="container">
        
        
        <button id="primary-nav-button" type="button"><?php echo e(__('messages.nav.menu')); ?></button>

        
        <a href="<?php echo e(route('home', ['locale' => app()->getLocale()])); ?>" class="header-logo-link">
            <div class="logo">
                
                <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Venue Logo">
            </div>
        </a>

        <?php
            $currentLocale = app()->getLocale();
            $targetLocale = $currentLocale === 'pt' ? 'en' : 'pt';
            $targetText = $currentLocale === 'pt' ? __('messages.nav.english') : __('messages.nav.portuguese');

            $currentRoute = Route::currentRouteName() ?: 'home';
            $params = Route::current() ? Route::current()->parameters() : ['locale' => $currentLocale];
        ?>

        
        <nav id="primary-nav" class="dropdown cf">
            <ul class="dropdown menu">
                <li><a href="<?php echo e(route("solucoes", array_merge($params, ['locale' => $currentLocale]))); ?>"><?php echo e(__('messages.nav.solucoes')); ?></a></li>
                <li><a href="#"><?php echo e(__('messages.nav.produtos')); ?></a></li>
                <li><a href="#"><?php echo e(__('messages.nav.servicos')); ?></a></li>
                <li><a href="#"><?php echo e(__('messages.nav.comunidade')); ?></a></li>
                <li><a href="#"><?php echo e(__('messages.nav.suporte')); ?></a></li>
                <li><a href="#"><?php echo e(__('messages.nav.ondecomprar')); ?></a></li>

                
                <li id="lang-switcher">
                    
                    <a href="<?php echo e(route($currentRoute, array_merge($params, ['locale' => $targetLocale]))); ?>"
                        title="Mudar para <?php echo e($targetText); ?>">
                        <?php echo e($targetText); ?>

                    </a>
                </li>
            </ul>
        </nav>
        
    </div>
</header><?php /**PATH B:\Projetos\website\drones-project\resources\views/layouts/header.blade.php ENDPATH**/ ?>