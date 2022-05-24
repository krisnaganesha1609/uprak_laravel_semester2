<footer class="footer">

    <section class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="{{ route('home') }}"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="{{ url('/shop') }}"> <i class="fas fa-angle-right"></i> Shop</a>
            <a href="{{ route('about') }}"> <i class="fas fa-angle-right"></i> About</a>
            <a href="{{ route('contact') }}"> <i class="fas fa-angle-right"></i> Contact</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="{{ url('cart') }}"> <i class="fas fa-angle-right"></i>Cart</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('logout') }}"><i class="fas fa-angle-right"></i>Logout</a>
                @else
                    <a href="{{ route('login') }}"><i class="fas fa-angle-right"></i>Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"><i class="fas fa-angle-right"></i>Register</a>
                    @endif
                @endauth
            @endif
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <p> <i class="fas fa-phone"></i> +62-8123-4567-8900 </p>
            <p> <i class="fas fa-phone"></i> +62-8098-7654-3210 </p>
            <p> <i class="fas fa-envelope"></i> farmystore@gmail.com </p>
            <p> <i class="fas fa-map-marker-alt"></i> Jawa Barat, Indonesia</p>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
        </div>

    </section>

    <p class="credit"> &copy; Copyright @ <?= date('Y') ?> <span>Farmy </span> | All Rights Reserved! </p>

</footer>
