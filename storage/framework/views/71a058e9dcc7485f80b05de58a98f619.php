<?php $__env->startSection('content'); ?>
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <img src="<?php echo e(asset('img/drone_gif.gif')); ?>" alt="<?php echo e(__('messages.banner.drone_alt')); ?>"
                            class="drone-overlay">
                        <div class="line-dec"></div>
                        <h2>SkyDri</h2>
                        <span><?php echo e(__('messages.banner.subtitle')); ?></span>
                        <div class="blue-button">
                            <a class="scrollTo" data-scrollTo="popular"
                                href="#"><?php echo e(__('messages.banner.discover_button')); ?></a>
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
                        
                        <h2><?php echo e(__('messages.products.title')); ?></h2>
                    </div>
                </div>
            </div>

            
            <h3 class="carousel-subtitle"><?php echo e(__('messages.products.subtitle')); ?></h3>
            <div class="owl-carousel owl-theme">

                

                <div class="item popular-item">
                    <div class="thumb">
                        
                        <img src="<?php echo e(asset('img/produtos/drone1.jpg')); ?>" alt="DJI Enterprise Drone">
                        <div class="text-content">
                            <h4><?php echo e(__('messages.products.pro_title')); ?></h4>
                            <span><?php echo e(__('messages.products.pro_tag')); ?> - <?php echo e(__('messages.popular.listings')); ?></span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>

                <div class="item popular-item">
                    <div class="thumb">
                        
                        <img src="<?php echo e(asset('img/produtos/drone2.jpg')); ?>" alt="Drone Matrice">
                        <div class="text-content">
                            <h4>Spider PT</h4>
                            <span><?php echo e(__('messages.products.pro_tag')); ?> - 18 <?php echo e(__('messages.popular.listings')); ?></span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>

                

                <div class="item popular-item">
                    <div class="thumb">
                        
                        <img src="<?php echo e(asset('img/produtos/drone3.jpg')); ?>" alt="DJI Mavic Drone">
                        <div class="text-content">
                            <h4><?php echo e(__('messages.products.consumer_title')); ?></h4>
                            
                            <span
                                style="font-weight: bold; color: var(--color-primary-light);"><?php echo e(__('messages.products.criadores_entusiastas')); ?></span>
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
                        
                        <h2><?php echo e(__('messages.products2.title')); ?></h2>
                    </div>
                </div>
            </div>

            
            <h3 class="carousel-subtitle"><?php echo e(__('messages.products.subtitle')); ?></h3>
            <div class="owl-carousel owl-theme">

                

                <div class="item popular-item">
                    <div class="thumb">
                        
                        <img src="<?php echo e(asset('img/produtos/drone1.jpg')); ?>" alt="DJI Enterprise Drone">
                        <div class="text-content">
                            <h4><?php echo e(__('messages.products.pro_title')); ?></h4>
                            <span><?php echo e(__('messages.products.pro_tag')); ?> - <?php echo e(__('messages.popular.listings')); ?></span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>

                <div class="item popular-item">
                    <div class="thumb">
                        
                        <img src="<?php echo e(asset('img/produtos/drone2.jpg')); ?>" alt="Drone Matrice">
                        <div class="text-content">
                            <h4>Spider PT</h4>
                            <span><?php echo e(__('messages.products.pro_tag')); ?> - 18 <?php echo e(__('messages.popular.listings')); ?></span>
                        </div>
                        <div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div>
                    </div>
                </div>

                

                <div class="item popular-item">
                    <div class="thumb">
                        
                        <img src="<?php echo e(asset('img/produtos/drone3.jpg')); ?>" alt="DJI Mavic Drone">
                        <div class="text-content">
                            <h4><?php echo e(__('messages.products.consumer_title')); ?></h4>
                            
                            <span
                                style="font-weight: bold; color: var(--color-primary-light);"><?php echo e(__('messages.products.criadores_entusiastas')); ?></span>
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
                        
                        <h2><?php echo e(__('messages.services.title')); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/service_icon_1.png')); ?>" alt="Design">
                        </div>
                        <h4><?php echo e(__('messages.services.item1_title')); ?></h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/service_icon_2.png')); ?>" alt="Customizável">
                        </div>
                        <h4><?php echo e(__('messages.services.item2_title')); ?></h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/service_icon_3.png')); ?>" alt="Serviço">
                        </div>
                        <h4><?php echo e(__('messages.services.item3_title')); ?></h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/service_icon_4.png')); ?>" alt="Item 4">
                        </div>
                        <h4><?php echo e(__('messages.services.item4_title')); ?></h4>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/service_icon_5.png')); ?>" alt="Item 5">
                        </div>
                        <h4><?php echo e(__('messages.services.item5_title')); ?></h4>
                    </div>
                </div>

            </div>

            <div class="row down-services">
            </div>
        </div>
    </section>


    <section class="community-section" id="community">
        <div class="community-bg" style="background-image: url('<?php echo e(asset('img/comunidade.jpg')); ?>')"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="community-content">
                        <h2><?php echo e(__('messages.community.title')); ?></h2>
                        <div class="community-features">
                            <div class="feature-item">
                                <h4><?php echo e(__('messages.community.feature1_title')); ?></h4>
                                <p><?php echo e(__('messages.community.feature1_text')); ?></p>
                            </div>
                            <div class="feature-item">
                                <h4><?php echo e(__('messages.community.feature2_title')); ?></h4>
                                <p><?php echo e(__('messages.community.feature2_text')); ?></p>
                            </div>
                        </div>
                        <a href="#" class="btn-community"><?php echo e(__('messages.community.cta_button')); ?></a>
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
                        <span><?php echo e(__('messages.contact.title')); ?></span>
                        <h2><?php echo e(__('messages.contact.subtitle_lorem')); ?></h2> 
                    </div>
                    <button id="modBtn" class="modal-btn"><?php echo e(__('messages.contact.talk_button')); ?></button>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH B:\Projetos\website\drones-project\resources\views/home.blade.php ENDPATH**/ ?>