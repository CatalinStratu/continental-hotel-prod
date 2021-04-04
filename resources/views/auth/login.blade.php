<x-app-layout>
    <x-slot name="content">
        <div id="user_container">
            <h3>Stay connected with us</h3>
            <p>We keep people together and things simple.</p>
        </div>
        <x-jet-validation-errors class="mb-4" />
        <section id="auth_container_two">
            <div class="svg_container_two"></div>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="details_container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h4>Sign In</h4>
                    <p>Please fill in this form in order to sign in.</p>
                    <hr>
                    <label for="email" class="fa fa-envelope"> Email *</label>
                    <input type="text" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email"  value="{{ old('email') }}" id="email" spellcheck="false" required>

                    <label for="psw" class="fa fa-lock"> Password *</label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>
                    <hr>
                    <p>* required fields.</p>
                    <button type="submit" class="registerbtn">Sign In</button>
                    <div class="container signin">
                        <p>You don't have an account? <a href="{{route('register')}}">Register</a>.</p>
                    </div>
                </form>
            </div>
        </section>
    </x-slot>
</x-app-layout>
