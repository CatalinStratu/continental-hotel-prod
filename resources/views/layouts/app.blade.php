<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Continental Hotel - welcome to our website.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}"/>
</head>

<body>
<section id="header">
    <div class="user_services">
        <div class="options">
            <a class="fa fa-credit-card-alt" href="information.html"> Payment Options</a>
            <a class="fa fa-check-square-o" href="information.html"> Terms & Conditions</a>
        </div>
        <div class="client_area">
            @auth
                <div class="my_settings">
                    <a class="fa fa-envelope-o" href="client.html"> My Bookings</a>
                </div>
            @endif
            <div class="auth_button">
                <a class="fa fa-user-circle-o fa-2x"></a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">My Account</a> /
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>

                    @else
                        @if (Route::has('register')) <a href="{{ route('register') }}">Register</a> @endif /  <a
                            href="{{ route('login') }}">Sign In</a>
                    @endif
                @endif
            </div>
        </div>
    </div>
    <div class="user_navigation">
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Continental"></a>
        </div>
        <div class="links">
            <a class="home"
               {{ Request::routeIs('index') ? ' style="color: rgb(193, 155, 118);" ' : '' }} href="{{ route('index') }}">Home</a>
            <a class="rooms" href="rentroom.html">Rooms</a>
            <a class="services" href="services.html">Services</a>
            <a class="about" href="{{ route('about') }}">About us</a>
            <a class="contact" href="contact.html">Contact</a>
            <div class="book_button">
                <a href="rentroom.html">BOOK NOW</a>
            </div>
        </div>
        <div class="navigation">
            <div class="hamburger" onclick="toggleMenu()">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="hamburger-menu">
                <a class="home" href="index.html" onclick="toggleMenu()">Home</a>
                <a class="rooms" href="rentroom.html" onclick="toggleMenu()">Rooms</a>
                <a class="services" href="services.html" onclick="toggleMenu()">Services</a>
                <a class="about" href="{{ route('about') }}" onclick="toggleMenu()">About us</a>
                <a class="contact" href="contact.html" onclick="toggleMenu()">Contact</a>
            </div>

        </div>
    </div>
</section>
{{ $content }}
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
            <a class="home" href="{{ route('index') }}">Home</a>
            <a class="rooms" href="rentroom.html">Rooms</a>
            <a class="services" href="services.html">Services</a>
            <a class="about" href="{{ route('about') }}">About us</a>
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
<script src="{{ asset('assets/js/main.js') }}" async defer></script>
</html>
