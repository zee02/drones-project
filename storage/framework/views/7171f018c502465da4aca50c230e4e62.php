

<?php $__env->startSection('content'); ?>

    <main>
        
        <section id="hero" class="hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                
                <h1><?php echo e(__('messages.servicos_page.hero_title_p1')); ?> <strong><?php echo e(__('messages.servicos_page.hero_title_p2')); ?></strong>, <?php echo e(__('messages.servicos_page.hero_title_p3')); ?></h1>
                
                
                <a href="<?php echo e(route('solucoes', ['locale' => app()->getLocale()])); ?>" class="cta-button"><?php echo e(__('messages.servicos_page.hero_cta')); ?></a>
            </div>
        </section>

        <section id="pilares" class="pillars-section">
            
            <h2><?php echo e(__('messages.servicos_page.pillars_title')); ?></h2>
            <div class="pillar-grid">
                
                
                <div class="pillar-card fade-in" data-delay="0">
                    <div class="card-image-wrapper">
                         <img src="<?php echo e(asset('img/servicos/consultoria.jpg')); ?>" alt="Pessoas a planear um mapa digital com um drone no fundo">
                    </div>
                    <div class="card-content">
                        <i class="fas fa-lightbulb icon-primary"></i>
                        <h3><?php echo e(__('messages.servicos_page.pilar1_title')); ?></h3>
                        <ul class="service-list">
                            <li><i class="fas fa-check-circle"></i> <?php echo e(__('messages.servicos_page.pilar1_item1')); ?></li>
                            <li><i class="fas fa-check-circle"></i> <?php echo e(__('messages.servicos_page.pilar1_item2')); ?></li>
                        </ul>
                    </div>
                </div>

                
                <div class="pillar-card fade-in" data-delay="1">
                    <div class="card-image-wrapper">
                         <img src="<?php echo e(asset('img/servicos/formacao.jpg')); ?>" alt="Piloto de drone a receber formação em segurança">
                    </div>
                    <div class="card-content">
                        <i class="fas fa-user-graduate icon-primary"></i>
                        <h3><?php echo e(__('messages.servicos_page.pilar2_title')); ?></h3>
                        <ul class="service-list">
                            <li><i class="fas fa-check-circle"></i> <?php echo e(__('messages.servicos_page.pilar2_item1')); ?></li>
                            <li><i class="fas fa-check-circle"></i> <?php echo e(__('messages.servicos_page.pilar2_item2')); ?></li>
                        </ul>
                    </div>
                </div>

                
                <div class="pillar-card fade-in" data-delay="2">
                    <div class="card-image-wrapper">
                         <img src="<?php echo e(asset('img/servicos/manutencao.jpg')); ?>" alt="Técnico a inspecionar um drone em manutenção">
                    </div>
                    <div class="card-content">
                        <i class="fas fa-tools icon-primary"></i>
                        <h3><?php echo e(__('messages.servicos_page.pilar3_title')); ?></h3>
                        <ul class="service-list">
                            <li><i class="fas fa-check-circle"></i> <?php echo e(__('messages.servicos_page.pilar3_item1')); ?></li>
                            <li><i class="fas fa-check-circle"></i> <?php echo e(__('messages.servicos_page.pilar3_item2')); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta-final" class="cta-section">
            <div class="cta-content">
                
                <h2><?php echo e(__('messages.servicos_page.cta_title')); ?></h2>
                <p class="p-servicos"><?php echo e(__('messages.servicos_page.cta_subtitle')); ?></p>
                
                
                <a href="" class="cta-button secondary-button"><?php echo e(__('messages.servicos_page.cta_button')); ?></a>
            </div>
        </section>

    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('css/servicos/servicos.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    
    <script src="<?php echo e(asset('js/servicos/servicos.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH B:\Projetos\website\drones-project\resources\views/sub-pages/servicos.blade.php ENDPATH**/ ?>