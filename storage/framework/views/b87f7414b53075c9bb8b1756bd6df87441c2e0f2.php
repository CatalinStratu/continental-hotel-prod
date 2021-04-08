<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Continental Hotel - welcome to our website.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('assets/style/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/favicon.png')); ?>"/>
</head>

<body>
<section id="header">
    <div class="user_services">
        <div class="options">
            <a class="fa fa-credit-card-alt" href="information.html"> Payment Options</a>
            <a class="fa fa-check-square-o" href="information.html"> Terms & Conditions</a>
        </div>
        <div class="client_area">
            <?php if(auth()->guard()->check()): ?>
                <div class="my_settings">
                    <a class="fa fa-envelope-o" href="<?php echo e(route('dashboard')); ?>"> My Bookings</a>
                </div>
            <?php endif; ?>
            <div class="auth_button">
                <a class="fa fa-user-circle-o fa-2x"></a>
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a> /
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <a href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                        </form>

                    <?php else: ?>
                        <?php if(Route::has('register')): ?> <a href="<?php echo e(route('register')); ?>">Register</a> <?php endif; ?> /  <a
                            href="<?php echo e(route('login')); ?>">Sign In</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="user_navigation">
        <div class="logo">
            <a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="Continental"></a>
        </div>
        <div class="links">
            <a class="home <?php echo e(Request::routeIs('index') ? 'actual' : ''); ?>" href="<?php echo e(route('index')); ?>">Home</a>
            <a class="rooms <?php echo e(Request::routeIs('rooms_types') ? 'actual' : ''); ?>" href="<?php echo e(route('rooms_types')); ?>">Rooms</a>
            <a class="services <?php echo e(Request::routeIs('services') ? 'actual' : ''); ?>" href="<?php echo e(route('services')); ?>">Services</a>
            <a class="about <?php echo e(Request::routeIs('about') ? 'actual' : ''); ?>" href="<?php echo e(route('about')); ?>">About us</a>
            <a class="contact <?php echo e(Request::routeIs('contact') ? 'actual' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>
            <div class="book_button">
                <a href="<?php echo e(route('rooms_types')); ?>">BOOK NOW</a>
            </div>
        </div>
        <div class="navigation">
            <div class="hamburger" onclick="toggleMenu()">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="hamburger-menu">
                <a class="home <?php echo e(Request::routeIs('index') ? 'actual' : ''); ?> " href="<?php echo e(route('index')); ?>">Home</a>
                <a class="rooms <?php echo e(Request::routeIs('rooms_types') ? 'actual' : ''); ?>" href="<?php echo e(route('rooms_types')); ?>" onclick="toggleMenu()">Rooms</a>
                <a class="services <?php echo e(Request::routeIs('services') ? 'actual' : ''); ?>" href="<?php echo e(route('services')); ?>" onclick="toggleMenu()">Services</a>
                <a class="about <?php echo e(Request::routeIs('about') ? 'actual' : ''); ?>" href="<?php echo e(route('about')); ?>" onclick="toggleMenu()">About us</a>
                <a class="contact <?php echo e(Request::routeIs('contact') ? 'actual' : ''); ?>" href="<?php echo e(route('contact')); ?>" onclick="toggleMenu()">Contact</a>
            </div>

        </div>
    </div>
</section>
<?php echo e($content); ?>

<section id="footer">
    <div class="upper_content">
        <div class="data_container">
            <h4>Phone Support</h4>
            <p>24 HOURS A DAY</p>
            <h5>+(40)799387932</h5>
        </div>
        <div class="data_container">
            <h4>Follow us</h4>
            <p>SOCIAL MEDIA ACCOUNTS</p>
            <div class="social_media">
                <a href="#" class="fa fa-youtube-play"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-facebook-official"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>

        </div>
        <div class="data_container">
            <h4>Our Newsletter</h4>
            <p>SUBSCRIBE FOR MORE OFFERS</p>
            <div class="button">
                <form action="/newletter.php">
                    <input type="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="email"
                           name="email" required>
                    <input type="submit" value="SUBSCRIBE">
                </form>
            </div>
        </div>

    </div>
    <div class="lower_content">
        <div class="links">
            <a class="home" href="<?php echo e(route('index')); ?>">Home</a>
            <a class="rooms" href="<?php echo e(route('rooms_types')); ?>">Rooms</a>
            <a class="services" href="services.html">Services</a>
            <a class="about" href="<?php echo e(route('about')); ?>">About us</a>
            <a class="contact" href="contact.html">Contact</a>
        </div>
        <div class="copyright">
            <p>Continental Hotel © 2021. All Rights Reserved. </p>
        </div>
    </div>
</section>
<div id="preloader">
    <span>↓</span>
    <span style="--delay: 0.1s">↓</span>
    <span style="--delay: 0.3s">↓</span>
    <span style="--delay: 0.4s">↓</span>
    <span style="--delay: 0.5s">↓</span>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>" async defer></script>
</html>
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/layouts/app.blade.php ENDPATH**/ ?>