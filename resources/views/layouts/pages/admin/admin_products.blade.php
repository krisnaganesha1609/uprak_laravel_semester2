@extends('layouts.components.admin_main')
@section('admin-content')
<section class="show-products">
    <div class="box-container">
        @if (!empty($products))
            @foreach ($products as $item)
                <form action="" class="box" method="POST">
                    @csrf
                    <div class="price">$/-{{ $item->price }}</div>
                    <img src="{{ asset('uploaded_img/' . $item->image) }}" alt="">
                    <div class="name">{{ $item->name }}</div>
                    <div class="cat">{{ $item->category }}</div>
                    <div class="details">{{ $item->details }}</div>
                    <input type="number" min="1" value="1" name="p_qty" class="qty">
                    <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
                    <input type="submit" value="add to cart" class="btn" name="add_to_cart">
                    @if (Route::has('login'))
                        @auth
                            <div class="flex-btn">
                                <a href="/shop/{{ $item->id }}/edit" class="option-btn">update</a>
                                <form action="/admin/products/{{ $item->id }}" method="POST">
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
@endsection