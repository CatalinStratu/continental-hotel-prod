<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Continental Hotel - welcome to our website.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" {{ asset('assets/style/style.css') }}">
    <link href="//db.onlinewebfonts.com/c/32441506567156636049eb850b53f02a?family=Times+New+Roman" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/icons/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<section id="header">
    <div class="user_services">
        <div class="options">
            <a class="fa fa-credit-card-alt" href="/page/information.html"> Payment Options</a>
            <a class="fa fa-check-square-o" href="/page/information.html"> Terms & Conditions</a>
        </div>
        <div class="client_area">
            <a class="fa fa-envelope-o" href="/page/client.html"> My Bookings</a>
            <a class="fa fa-pencil" href="/page/client.html"> Add Your Review</a>
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
                            @if (Route::has('register')) <a href="{{ route('register') }}">Register</a> @endif /  <a href="{{ route('login') }}">Sign In</a>
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
            <a href="{{ route('index') }}">Home</a>
            <a href="/page/rentroom.html">Rooms</a>
            <a href="/page/services.html">Services</a>
            <a href="/page/about.html">About us</a>
            <a href="/page/contact.html">Contact</a>
            <div class="book_button">
                <a href="/page/rentroom.html">BOOK NOW</a>
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
                    <input type="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="email" name="email" required>
                    <input type="submit" value="SUBSCRIBE">
                </form>
            </div>
        </div>

    </div>
    <div class="lower_content">
        <div class="links">
            <a href="{{ route('index') }}">Home</a>
            <a href="/page/rentroom.html">Rooms</a>
            <a href="/page/services.html">Services</a>
            <a href="/page/about.html">About us</a>
            <a href="/page/contact.html">Contact</a>
        </div>
    </div>
</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/js/main.js ') }}" async defer></script>
</html>