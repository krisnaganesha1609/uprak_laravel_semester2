@extends('layouts.components.main')
@section('title')
    Cart
@endsection
@section('content')
    @include('layouts.components.header')
    <section class="shopping-cart">

        <h1 class="title">products added</h1>

        <div class="box-container">

            <?php $total = 0; ?>
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity']; ?>
                    <form action="" method="GET" class="box">
                        @csrf
                        <button class="fas fa-times remove-from-cart" data-id="{{ $id }}"></button>
                        <img src="{{ asset('uploaded_img/' . $details['image']) }}" alt="">
                        <div class="name">{{ $details['name'] }}</div>
                        <div class="price">$/-{{ $details['price'] }}</div>
                        <input type="hidden" name="cart_id" value="">
                        <div class="flex-btn">
                            <input type="number" min="1" value="{{ $details['quantity'] }}" class="qty quantity">
                            <button class="option-btn update-cart" data-id="{{ $id }}">Update</button>
                        </div>
                        <div class="sub-total"> sub total :
                            <span>$/-{{ $details['price'] * $details['quantity'] }}</span>
                        </div>
                    </form>
        </div>
        @endforeach
    @else
        <p class="empty">Your Cart Is Empty!</p>
        @endif

        <div class="cart-total">
            <p>grand total : <span>$/- {{ $total }}</span></p>
            <a href="{{ url('/shop') }}" class="option-btn">continue shopping</a>
            <a href="#" class="btn ">proceed to checkout</a>
        </div>

    </section>
    @include('layouts.components.footer')
    <script type="text/javascript">
        $(".update-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id"),
                    quantity: ele.parents("input").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });
        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
