


<?php $__env->startSection('content'); ?>

    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <img src="<?php echo e(asset('img/drone_gif.gif')); ?>" alt="<?php echo e(__('messages.banner.drone_alt')); ?>" class="drone-overlay">
                        <div class="line-dec"></div>
                        <h2>SkyDry</h2>
                        <span><?php echo e(__('messages.banner.subtitle')); ?></span>
                        <div class="blue-button">
                            <a class="scrollTo" data-scrollTo="popular" href="#"><?php echo e(__('messages.banner.discover_button')); ?></a>
                        </div>
                    </div>
                    <div class="submit-form">
                        <form id="form-submit" action="" method="get">
                            <div class="row">
                                <div class="col-md-3 first-item">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="<?php echo e(__('messages.form.name_placeholder')); ?>" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 second-item">
                                    <fieldset>
                                        <input name="location" type="text" class="form-control" id="location" placeholder="<?php echo e(__('messages.form.location_placeholder')); ?>" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 third-item">
                                    <fieldset>
                                        <select required name='category' onchange='this.form.()'>
                                            <option value=""><?php echo e(__('messages.form.category_select')); ?></option>
                                            <option value="Shops"><?php echo e(__('messages.form.category_shops')); ?></option>
                                            <option value="Hotels"><?php echo e(__('messages.form.category_hotels')); ?></option>
                                            <option value="Restaurants"><?php echo e(__('messages.form.category_restaurants')); ?></option>
                                            <option value="Events"><?php echo e(__('messages.form.category_events')); ?></option>
                                            <option value="Meetings"><?php echo e(__('messages.form.category_meetings')); ?></option>
                                            <option value="Fitness"><?php echo e(__('messages.form.category_fitness')); ?></option>
                                            <option value="Cafes"><?php echo e(__('messages.form.category_cafes')); ?></option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-3">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn"><?php echo e(__('messages.form.search_button')); ?></button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-places" id="popular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span><?php echo e(__('messages.popular.title')); ?></span>
                        <h2><?php echo e(__('messages.popular.subtitle')); ?></h2>
                    </div>
                </div> 
            </div> 
            <div class="owl-carousel owl-theme">
                
                
                
                <div class="item popular-item"><div class="thumb"><img src="<?php echo e(asset('img/popular_item_1.jpg')); ?>" alt=""><div class="text-content"><h4>Mauris tempus</h4><span>76 <?php echo e(__('messages.popular.listings')); ?></span></div><div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div></div></div>
                <div class="item popular-item"><div class="thumb"><img src="<?php echo e(asset('img/popular_item_2.jpg')); ?>" alt=""><div class="text-content"><h4>Aenean dolor</h4><span>18 <?php echo e(__('messages.popular.listings')); ?></span></div><div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div></div></div>
                <div class="item popular-item"><div class="thumb"><img src="<?php echo e(asset('img/popular_item_3.jpg')); ?>" alt=""><div class="text-content"><h4>Nunc at quam</h4><span>55 <?php echo e(__('messages.popular.listings')); ?></span></div><div class="plus-button"><a href="#"><i class="fa fa-plus"></i></a></div></div></div>
                
            </div>
        </div>
    </section>


    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span><?php echo e(__('messages.services.title')); ?></span>
                        <h2><?php echo e(__('messages.services.subtitle')); ?></h2>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/service_icon_1.png')); ?>" alt="">
                        </div>
                        <h4><?php echo e(__('messages.services.item1_title')); ?></h4>
                        <p><?php echo e(__('messages.services.item1_text')); ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/service_icon_2.png')); ?>" alt="">
                        </div>
                        <h4><?php echo e(__('messages.services.item2_title')); ?></h4>
                        <p><?php echo e(__('messages.services.item2_text')); ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/service_icon_3.png')); ?>" alt="">
                        </div>
                        <h4><?php echo e(__('messages.services.item3_title')); ?></h4>
                        <p><?php echo e(__('messages.services.item3_text_lorem')); ?></p> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="down-services">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="left-content">
                                    
                                    <h4>In hac habitasse platea dictumst</h4>
                                    <p>Aenean hendrerit metus leo, quis viverra purus condimentum nec. Pellentesque a sem semper, lobortis mauris non, varius urna. Quisque sodales purus eu tellus fringilla.<br><br>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.</p>
                                    <div class="blue-button">
                                        <a href="#"><?php echo e(__('messages.services.discover_button')); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="accordions">
                                    
                                    <ul class="accordion">
                                        <li><a>Ut in dapibus ipsum</a><p>Nulla eget aliquet dui, vitae tincidunt nulla. Sed sagittis odio vitae auctor volutpat. In semper ex neque, ut hendrerit mauris rutrum eget. Integer consectetur neque eu enim dictum porta. Sed et risus ac sapien congue mattis.</p></li>
                                        <li><a>Vivamus ligula metus</a><p>Integer vel augue arcu. Fusce ac turpis cursus, malesuada nulla quis, lobortis dui. Etiam blandit, erat efficitur rhoncus pellentesque, ligula turpis tempor dolor.</p></li>
                                        <li><a>Suspendisse dapibus</a><p>Nullam nibh lacus, rhoncus sit amet feugiat vel, porttitor sit amet nibh. Pellentesque feugiat justo nec enim pretium, sed faucibus lacus aliquam. Sed ac interdum mauris.</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <span><?php echo e(__('messages.video.title')); ?></span>
                <h2><?php echo e(__('messages.video.subtitle_lorem')); ?></h2> 
                <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <video autoplay="" loop="" muted>
            <source src="<?php echo e(asset('highway-loop.mp4')); ?>" type="video/mp4" />
        </video>
    </section>

    <section class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span><?php echo e(__('messages.pricing.title')); ?></span>
                        <h2><?php echo e(__('messages.pricing.subtitle_lorem')); ?></h2> 
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4><?php echo e(__('messages.pricing.plan1_title')); ?></h4>
                            <h1>$25</h1>
                            <span><?php echo e(__('messages.pricing.monthly')); ?></span>
                        </div>
                        <ul>
                            
                            <li><a href="#">100 Suspendisse dapibus</a></li>
                            <li><a href="#">10x Paleo celiac enamel</a></li>
                            <li><a href="#">Williamsburg organic post ironic</a></li>
                            <li><a href="#">Helvetica pinterest yuccie</a></li>
                            <li><a href="#">Plaid shabby chic godard</a></li>
                        </ul>
                        <div class="blue-button">
                            <a href="#"><?php echo e(__('messages.pricing.buy_button')); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4><?php echo e(__('messages.pricing.plan2_title')); ?></h4>
                            <h1>$45</h1>
                            <span><?php echo e(__('messages.pricing.monthly')); ?></span>
                        </div>
                        <ul>
                            
                            <li><a href="#">200 Suspendisse dapibus</a></li>
                            <li><a href="#">20x Paleo celiac enamel</a></li>
                            <li><a href="#">Williamsburg organic post ironic</a></li>
                            <li><a href="#">Helvetica pinterest yuccie</a></li>
                            <li><a href="#">Plaid shabby chic godard</a></li>
                        </ul>
                        <div class="blue-button">
                            <a href="#"><?php echo e(__('messages.pricing.buy_button')); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4><?php echo e(__('messages.pricing.plan3_title')); ?></h4>
                            <h1>$85</h1>
                            <span><?php echo e(__('messages.pricing.monthly')); ?></span>
                        </div>
                        <ul>
                            
                            <li><a href="#">400 Suspendisse dapibus</a></li>
                            <li><a href="#">40x Paleo celiac enamel</a></li>
                            <li><a href="#">Williamsburg organic post ironic</a></li>
                            <li><a href="#">Helvetica pinterest yuccie</a></li>
                            <li><a href="#">Plaid shabby chic godard</a></li>
                        </ul>
                        <div class="blue-button">
                            <a href="#"><?php echo e(__('messages.pricing.buy_button')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="wrapper">
                    <div class="section-heading">
                        <span><?php echo e(__('messages.contact.title')); ?></span>
                        <h2><?php echo e(__('messages.contact.subtitle_lorem')); ?></h2> 
                    </div>
                    <button id="modBtn" class="modal-btn"><?php echo e(__('messages.contact.talk_button')); ?></button>
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
                                                <span><?php echo e(__('messages.modal.title')); ?></span>
                                                <h2><?php echo e(__('messages.modal.subtitle')); ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset><input name="name" type="text" class="form-control" id="name" placeholder="<?php echo e(__('messages.form.name_placeholder')); ?>" required=""></fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset><input name="subject" type="text" class="form-control" id="subject" placeholder="<?php echo e(__('messages.modal.subject_placeholder')); ?>" required=""></fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset><textarea name="message" rows="6" class="form-control" id="message" placeholder="<?php echo e(__('messages.modal.message_placeholder')); ?>" required=""></textarea></fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset><button type="submit" id="form-submit" class="btn"><?php echo e(__('messages.modal.send_button')); ?></button></fieldset>
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
                                                    <span><?php echo e(__('messages.modal.about_title')); ?></span>
                                                    <h2><?php echo e(__('messages.modal.about_subtitle')); ?></h2>
                                                </div>
                                                <p><?php echo e(__('messages.modal.about_text_lorem')); ?></p> 
                                                <ul>
                                                    <li><span><?php echo e(__('messages.modal.phone')); ?></span><a href="#">010-050-0550</a></li>
                                                    <li><span><?php echo e(__('messages.modal.email')); ?></span><a href="#">hi@company.co</a></li>
                                                    <li><span><?php echo e(__('messages.modal.address')); ?></span><a href="#">company.co</a></li>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH B:\Projetos\website\drones-project\resources\views/home.blade.php ENDPATH**/ ?>