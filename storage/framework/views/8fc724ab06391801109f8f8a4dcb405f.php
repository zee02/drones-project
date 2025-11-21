<?php $__env->startSection('content'); ?>
    
    <section class="hero hero--solucoes" style="--hero-bg-image: url('<?php echo e(asset('img/solucoes2-img.jpg')); ?>');">
        <div class="hero__content">
            <p class="hero__eyebrow"><?php echo e(__('messages.nav.solucoes')); ?> SkyDri</p>

            <h1 class="hero__title">
                <?php echo e(__('messages.hero.solucoes_header') ?? 'Diversas soluções à sua medida'); ?>

            </h1>

            <a href="#solucoes-detalhes" class="btn btn-primary hero__cta" data-scroll="#solucoes-detalhes">
                <?php echo e(__('messages.contact.specialist_button') ?? 'Falar com um especialista'); ?>

            </a>
        </div>
    </section>

    
    <section id="solucoes-setores" class="solucoes-grid-section">
        <div class="container">
            <div class="row justify-content-center">

                <h2 id="solucoes-titulo" class="solucoes-grid-title"><?php echo e(__('messages.services.title')); ?></h2>

            </div>

            <div class="row">

                
                <?php
                    $sectors = [
                        ['key' => 'item1', 'icon' => 'fa-leaf', 'bg_id' => 'agro'],
                        ['key' => 'item2', 'icon' => 'fa-bolt', 'bg_id' => 'energy'],
                        ['key' => 'item3', 'icon' => 'fa-building', 'bg_id' => 'construction'],
                        ['key' => 'item4', 'icon' => 'fa-industry', 'bg_id' => 'industry'],
                        ['key' => 'item5', 'icon' => 'fa-life-ring', 'bg_id' => 'gov'],
                        ['key' => 'item6', 'icon' => 'fa-hammer', 'bg_id' => 'custom'],
                    ];
                ?>

                <?php $__currentLoopData = $sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $isLastItem = ($index === count($sectors) - 1);
                        // Centralizar o 6º item na linha se houver 6
                        $offsetClass = ($isLastItem && count($sectors) % 3 === 0 && count($sectors) === 6) ? 'offset-md-4' : '';

                        // 1. Geração do Título Traduzido
                        $translatedTitle = __('messages.services.' . $sector['key'] . '_title');

                        // 2. Geração do Slug (que AGORA é o NOME DA ROTA ESTÁTICA)
                        // Ex: agricultura-floresta
                        $urlSlug = strtolower(str_replace([' & ', ' ', ' / '], ['-', '-', '-'], $translatedTitle));

                        // 3. Obter o Locale Atual para o link
                        $currentLocale = app()->getLocale();
                        
                        // NOTA: Os $params do Route::current() foram removidos do array_merge para limpeza.
                    ?>

                    <div class="col-lg-4 col-md-6 <?php echo e($offsetClass); ?> setor-card-wrapper">

                        
                        <a href="<?php echo e(route($urlSlug, ['locale' => $currentLocale])); ?>"
                            class="setor-card" data-bg-id="<?php echo e($sector['bg_id']); ?>">

                            
                            <div class="card-bg-overlay"></div>
                            <div class="card-bg-image"
                                style="background-image: url('<?php echo e(asset('img/sectors/' . $sector['bg_id'] . '.jpg')); ?>');"></div>

                            
                            <div class="card-content-wrap">
                                
                                <h3 class="card-title-heading"><?php echo e(__('messages.services.' . $sector['key'] . '_title')); ?></h3>
                                
                                <p class="card-description"><?php echo e(__('messages.services.' . $sector['key'] . '_desc')); ?></p>
                                
                                <span class="card-cta-link"><?php echo e(__('messages.products.detalhes_btn')); ?> &rarr;</span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            
            <div class="row pt-5 mt-5 border-top-soft">
                <div class="col-md-12">
                    <h2 id="solucoes-titulo2" class="text-center mb-5"><?php echo e(__('messages.about_us.how_we_work_title')); ?></h2>
                    <div class="how-we-work-timeline">
                        
                        
                        <div class="timeline-horizontal-line timeline-horizontal-line"></div>

                        <?php
                            // Array de chaves de localização para os passos
                            $steps = [
                                __('messages.about_us.step1'),
                                __('messages.about_us.step2'),
                                __('messages.about_us.step3'),
                                __('messages.about_us.step4')
                            ];
                        ?>

                        <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="timeline-step" data-aos="fade-up" data-aos-delay="<?php echo e($index * 150); ?>">
                                <div class="step-number"><?php echo e($index + 1); ?></div>
                                <h3 class="step-title"><?php echo e($step); ?></h3>

                                
                                <?php if(!$loop->last): ?>
                                    <div class="timeline-arrow"></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH B:\Projetos\website\drones-project\resources\views/sub-pages/solucoes/solucoes.blade.php ENDPATH**/ ?>