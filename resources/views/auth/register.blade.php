<x-app-layout>
    <x-slot name="content">
        <x-jet-validation-errors class="mb-4" />
        <div id="user_container">
            <h3>Stay connected with us</h3>
            <p>We keep people together and things simple.</p>
        </div>
        <section id="auth_container">
            <div class="svg_container"></div>
            <div class="details_container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h4>Register</h4>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <div class="label">
                        <label for="name" class="fa fa-user-circle-o"> Name *</label>
                        <input type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}" id="name" required>
                    </div>
                    <div class="label">
                        <label for="email" class="fa fa-envelope"> Email *</label>
                        <input type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email" required>
                    </div>
                    <label for="psw" class="fa fa-lock"> Password *</label>
                    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

                    <label for="psw-repeat" class="fa fa-lock"> Repeat Password *</label>
                    <input type="password" placeholder="Repeat Password" name="password_confirmation" id="psw-repeat" required>
                    <hr>
                    <p>* required fields.</p>
                    <p>By creating an account you agree to our <a href="/pages/settings.html">Terms & Privacy</a>.</p>
                    <button type="submit" class="registerbtn">Register</button>
                    <div class="container signin">
                        <p>Already have an account? <a href="{{ route('login') }}">Sign in</a>.</p>
                    </div>
                </form>
            </div>
        </section>
    </x-slot>
</x-app-layout>
