 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('content'); ?> 
        <div id="image_container">
            <h3>Services</h3>
            <p>We keep people together and things simple.</p>
        </div>
        <div id="heading">
            <h2>We make things luxury</h2>
            <p>HOTEL CONTINENTAL <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
        </div>
        <section id="overall_services">
            <div class="block_column_image">
                <img src="assets/images/services/block1.jpg" alt="lounge">
                <div class="content_column">
                    <h4>Lounge Bar</h4>
                    <hr>
                    <div class="p_content">
                        <p>
                            During the weekend Freddo, is always
                            hosting the coolest parties with great
                            music, live percussion shows, cool
                            mixes from our resident Dj, Christian
                            Lepah and fabulous flair shows.
                        </p>
                        <!-- <p>
                            Our food menus are prepared by
                            experienced chefs with impressive
                            resumes. They are made to meet the
                            most varied tastes and are constantly
                            adapting to keep up with our clients
                            dynamic. In conclusion, it worths
                            visiting us once, and we promise you
                            will become our best friend.
                        </p> -->
                    </div>
                    <div class="button">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="block_column_image">
                <img src="assets/images/services/block2.jpg" alt="lounge">
                <div class="content_column">
                    <h4>Restaurant</h4>
                    <hr>
                    <div class="p_content">
                        <p>
                            Continental Restaurant was born from the desire to create emotion in what we call culinary ritual and also to offer quality services to those who love Lebanese cuisine in the purest and its authentic form.
                        </p>
                    </div>
                    <div class="button">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="block_column_image">
                <img src="assets/images/services/block3.jpg" alt="lounge">
                <div class="content_column">
                    <h4>Wellness</h4>
                    <hr>
                    <div class="p_content">
                        <p>
                            Continental spa breaks are perfect for
                            times when you don’t want to travel
                            too far or get on a plane.
                        </p>
                        <p>
                            Our programmes are designed to leave
                            you feeling physically and mentally
                            refreshed.
                        </p>
                    </div>
                    <div class="button">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="bloop_small_services">
            <div class="content_container">
                <h2>Facilities</h2>
                <p>Hotel Continental offers exclusive services and benefits for
                    the comfort of its guests. Among many facilities that the hotel
                    has to offer, guests can directly access to the shopping mall and the
                    theme & amusement park by car park hotel entrance elevators. A
                    various choice of restaurants and cafés are available at the shopping
                    mall.</p>
                <div class="button">
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="content_container_benefits">
                <video loop muted autoplay>
                    <source src="assets/videos/hotel.mp4" type="video/mp4">
                </video>
            </div>
        </section>
        <section id="options_services_payment">
            <div class="alignment_container">
                <div class="option_container">
                    <a class="fa fa-money fa-5x"></a>
                    <h5>CASH PAYMENT</h5>
                </div>
                <div class="option_container">
                    <a class="fa fa-envelope fa-5x"></a>
                    <h5>BOOKING REQUEST</h5>
                </div>
            </div>
            <div class="alignment_container">
                <div class="option_container">
                    <a class="fa fa-paypal fa-5x"></a>
                    <h5>PAYPAL</h5>
                </div>
                <div class="option_container">
                    <a class="fa fa-google-wallet fa-5x"></a>
                    <h5>CREDIT CARD</h5>
                </div>
            </div>
        </section>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/services.blade.php ENDPATH**/ ?>