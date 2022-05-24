@extends('layouts.components.main')

@section('title')
    Home
@endsection

@section('content')
    @include('layouts.components.header')
    <div class="home-bg">

        <section class="home">

            <div class="content">
                <span>Don't Panic, Go Organic</span>
                <h3>Reach A Healthier You With Organic Foods</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto natus culpa officia quasi, accusantium
                    explicabo?</p>
                <a href="/about" class="btn">about us</a>
            </div>

        </section>

    </div>

    <section class="home-category">

        <h1 class="title">What We Provide</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/cat-1.png" alt="">
                <h3>Fruits</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
                {{-- <a href="category.php?category=fruits" class="btn">fruits</a> --}}
            </div>

            <div class="box">
                <img src="images/cat-2.png" alt="">
                <h3>Meat</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
                {{-- <a href="category.php?category=meat" class="btn">meat</a> --}}
            </div>

            <div class="box">
                <img src="images/cat-3.png" alt="">
                <h3>Vegetables</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
                {{-- <a href="category.php?category=vegitables" class="btn">vegitables</a> --}}
            </div>

            <div class="box">
                <img src="images/cat-4.png" alt="">
                <h3>Fish</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
                {{-- <a href="category.php?category=fish" class="btn">fish</a> --}}
            </div>

        </div>

    </section>

    {{-- <section class="products">

        <h1 class="title">latest products</h1>

        @include('layouts.pages.admin.admin_products')

    </section> --}}
    @include('layouts.components.footer')
@endsection
