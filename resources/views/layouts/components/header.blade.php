<header class="header">

    <div class="flex">

        <a href="{{ route('home') }}" class="logo">Farmy<span>.</span></a>

        <nav class="navbar">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ url('/shop') }}">Shop</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
            @if (Route::has('login'))
                @auth
                <a href="{{ url('/shop/create') }}">AddProducts</a>
                @endauth
                @else
            @endif
        </nav>

        <div class="icons">
            <div class="flex-btn">
                @if (Route::has('login'))
                    @auth
                        <div id="menu-btn" class="fas fa-bars"></div>
                        <div id="user-btn" class="fas fa-user"></div>
                        <a href="{{ url('cart') }}"><i class="fas fa-shopping-cart"></i><span></span></a>

                        <div class="profile">
                            <p>Hi, {{ Auth::user()->name }}</p>
                            <a href="{{ route('logout') }}" class="delete-btn">Logout</a>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="option-btn">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="option-btn">Register</a>
                        @endif
                    @endauth
                @endif

            </div>
        </div>



    </div>

</header>
