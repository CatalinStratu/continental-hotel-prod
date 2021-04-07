 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('content'); ?> 
        <section id="hero_content">
            <div id="hero">
                <h1>ENJOY A LUXURY</h1>
                <h1> EXPERIENCE.</h1>
                <div class="view_rooms">
                    <a href="rentroom.html">View Rooms</a>
                </div>
                <hr>
                <p>CONTINENTAL  LUXURY  HOTEL  &  BEST  RESORT</p>
            </div>
            <div id="lower_content">
                <div class="adress">
                    <p><span>ADDRESS</span> : Mihai Viteazul 4, Suceava, Romania.</p>
                </div>
                <div class="scroll_down">
                    <a href="#rent_room" class="fa fa-long-arrow-down"></a>
                </div>
                <div class="email">
                    <p><span>EMAIL</span> : booking@continentalhotel.com</p>
                </div>
            </div>
        </section>
        <section id="rent_room">
            <div class="room_background">
                <div class="content_container_before">
                    <h1>Holiday</h1>
                    <h1>Enjoy</h1>
                    <h5>X</h5>
                    <p>The perfect couple’s staycation awaits
                        those looking for the quintessential luxury
                        experience. Surrounded by uncompromising
                        comfort and world-class amenities, you may
                        indulge in flavorful cuisine, seasonal
                        cocktails.</p>
                </div>
                <div class="content_container">
                    <div class="container_header">
                        <h2>book a room</h2>
                        <h4>discover luxury life.</h4>
                    </div>
                </div>
                <div class="content_container_after">
                    <h3>Best Season </h3>
                    <h3>Price</h3>
                    <h5>X</h5>
                    <p>10 April to 15 April</p>
                    <h4>230$ / <span> two persons </span></h4>
                </div>
            </div>
        </section>
        <section id="relax_resort">
            <div class="content_container_before">
                <p>CONTINENTAL HOTEL</p>
                <hr>
                <h1>Relax in our</h1>
                <h1>Resort</h1>
                <p>With wireless internet access, LED Flat screen TVs and 7-day room
                    service, our accommodation combines classic elegance with the
                    latest technology, to keep you comfortable and connected while travelling.</p>
                <div class="button">
                    <a href="<?php echo e(route('about')); ?>">About Us</a>
                </div>
            </div>
            <div class="content_container_after">
                <div class="image1">
                    <img src="assets/images/home/resort1.jpg" alt="resort1">
                </div>
                <div class="image2">
                    <img src="assets/images/home/resort2.jpg" alt="resort2">
                </div>
                <div class="image3">
                    <img src="assets/images/home/resort3.jpg" alt="resort3">
                </div>
            </div>
        </section>
        <section id="best_rooms">
            <div class="title_container">
                <p>CONTINENTAL HOTEL</p>
                <hr>
                <h2>BEST ROOMS</h2>
            </div>
            <div class="rooms_container">

                <div class="small_room">
                    <div class="upper_content">
                        <img src="assets/images/home/room_small.jpeg" alt="room1">
                        <p>HOTEL CONTINENTAL <i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i></p>
                    </div>
                    <div class="lower_content">
                        <div class="content_alignment">
                            <h4> <?php echo e($RoomType->name); ?></h4>
                            <a class="fa fa-user-circle"> <span><?php echo e($RoomType->guests); ?> GUEST(s)</span></a>
                            <a class="fa fa-hotel"> <span><?php echo e($RoomType->size); ?>m<sup>2</sup></span></a>
                            <p> <?php echo e($RoomType->small_description); ?></p>
                            <div class="button">
                                <a href="rentroom.html">BOOK NOW FROM <?php echo e(intval($RoomType->price)); ?>$</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="four_rooms">
                    <?php $__currentLoopData = $RoomTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="square">
                        <img src="assets/images/home/room1.jpg" alt="room1">
                        <p><?php echo e($type->name); ?> <a href="rentroom.html">BOOK FROM  <?php echo e(intval($type->price)); ?>$ </a></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/index.blade.php ENDPATH**/ ?>