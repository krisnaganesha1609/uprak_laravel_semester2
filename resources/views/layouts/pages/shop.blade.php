@extends('layouts.components.main')
@section('title')
    Shop
@endsection
@section('content')
    @include('layouts.components.header')
    {{-- <section class="p-category">

        <a href="category.php?category=fruits">fruits</a>
        <a href="category.php?category=vegitables">vegetables</a>
        <a href="category.php?category=fish">fish</a>
        <a href="category.php?category=meat">meat</a>

    </section> --}}

    <section class="products">

        <h1 class="title">latest products</h1>

        <div class="box-container">
            @if (!empty($products))
            @foreach ($products as $item)
                <form action="" class="box" method="POST">
                    @csrf
                    <div class="price">$/-{{ $item->price }}</div>
                    <a href="/shop/{{ $item->id }}" class="fas fa-eye"></a>
                    <img src="{{ asset('uploaded_img/' . $item->image) }}" alt="">
                    <div class="name">{{ $item->name }}</div>
                    <div class="cat">{{ $item->category }}</div>
                    <div class="details">{{ $item->details }}</div>
                    <input type="number" min="1" value="1" name="p_qty" class="qty">
                    <a href="{{ url('add-to-cart/' . $item->id)}}" class="btn">Add To Cart</a>
                    @if (Route::has('login'))
                        @auth
                            <div class="flex-btn">
                                <a href="/shop/{{ $item->id }}/edit" class="option-btn">update</a>
                                <form action="/shop/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn"
                                        onclick="return confirm('delete this product?');">delete</button>
                                </form>
    
                            </div>
                        @endauth
                    @else
                    @endif
                </form>
            @endforeach
        @else
            <p class="empty">No Products Left!</p>
    
        @endif

        </div>

    </section>
    @include('layouts.components.footer')
@endsection
