<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets_user/css/main.css')); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Contintental - User Panel</title>
</head>

<body>
<!-- NAVBAR -->
<div class="user-services">
    <div class="options">
        <a class="fas fa-credit-card" href="information.html"> Payment Options</a>
        <a class="far fa-check-square" href="information.html"> Terms & Conditions</a>
    </div>
    <div class="client_area">
        <a class="far fa-envelope bookings" href="<?php echo e(route('dashboard')); ?>"> My Bookings</a>
        <div class="auth_button">
            <a class="fas fa-user-circle user-icon"></a>
            <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a> /
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <a href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>
            </form>
        </div>
    </div>
</div>
<div class="nav">
    <div class="nav__left">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <a href="<?php echo e(route('index')); ?>" class="logo1">
            <img src="<?php echo e(asset('assets_user/img/logo_continental_2.png')); ?>" alt="logo">
        </a>
    </div>
    <div class="nav__center">
        <div class="links">
            <a class="home" href="index.html">Home</a>
            <a class="rooms" href="rentroom.html">Rooms</a>
            <a class="services" href="services.html">Services</a>
            <a class="about" href="about.html">About us</a>
            <a class="contact" href="contact.html">Contact</a>
            <div class="book_button">
                <a href="signin.html">BOOK NOW</a>
            </div>
        </div>
    </div>
    <a href="<?php echo e(route('index')); ?>" class="logo2">
        <img src=" <?php echo e(asset('assets_user/img/logo_continental_2.png')); ?>" alt="logo">
    </a>
    <div class="nav__right">
        <!-- <a href="#" class="settings"><i class="fas fa-cog"></i></a> -->
        <a href="index.html" class="logout"><i class="fas fa-sign-out-alt"></i></a>
    </div>
</div>

<div class="container">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar__admin">
            <img src="<?php echo e(asset('assets_user/img/user.svg')); ?>" alt="admin picture">
            <div class="sidebar__admin__details">
                <p id="nume-admin"><?php echo e(auth()->user()->name); ?></p>
                <p id="functie-admin">Guest</p>
            </div>
        </div>
        <div class="sidebar__options">
            <ul>
                <li class="<?php echo e(Request::routeIs('dashboard') ? 'actual' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>">
                        <div class="selector"></div><i class="far fa-calendar-alt"></i>Bookings
                    </a>
                </li>
                <li>
                    <a href="transactions.html">
                        <div class="selector"></div><i class="far fa-credit-card"></i>Transactions
                    </a>
                </li>
                <li class="<?php echo e(Request::routeIs('user.profile.update.get') ? 'actual' : ''); ?>">
                    <a href="<?php echo e(route('user.profile.update.get')); ?>">
                        <div class="selector"></div><i class="fas fa-cog"></i>Settings
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- CONTENT MY BOOKINGS START-->
    <div class="content">
        <?php echo e($content); ?>

        <footer>Continental &copy; 2021</footer>
    </div>

    <!-- CONTENT RESERVATIONS END -->
</div>

<script src="<?php echo e(asset('assets_user/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>