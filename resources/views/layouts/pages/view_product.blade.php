@extends('layouts.components.main')
@section('title')
    view product
@endsection
@section('content')
    @include('layouts.components.header')
    <section class="quick-view">

        <h1 class="title">Quick View</h1>
        <form action="" class="box" method="POST">
            <div class="price">$<span>{{ $products->price }}</span>/-</div>
            <img src="{{ asset('uploaded_img/' . $products->image) }}" alt="">
            <div class="name">{{ $products->name }}</div>
            <div class="details">{{ $products->details }}</div>
            <input type="number" min="1" value="1" name="p_qty" class="qty">
            <a href="{{ url('add-to-cart/' . $item->id)}}" class="btn">Add To Cart</a>
            @if (Route::has('login'))
                @auth
                    <div class="flex-btn">
                        <a href="/shop/{{ $products->id }}/edit" class="option-btn">update</a>
                        <form action="/shop/{{ $products->id }}" method="POST">
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

    </section>
    @include('layouts.components.footer')
@endsection
