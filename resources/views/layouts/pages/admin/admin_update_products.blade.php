@extends('layouts.components.admin_main')
@section('admin-content')
    @include('layouts.components.header')
    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="update-product">

        <h1 class="title">update product</h1>
        <form action="/admin/products/{{ $products->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="old_image" value="{{ $products->image }}">
            <input type="hidden" name="pid" value="{{ $products->id }}">
            <img src="uploaded_img/{{ $products->image }}" alt="">
            <input type="text" name="name" id="name" placeholder="enter product name" required class="box"
                value="{{ $products->name }}">
            <input type="number" name="price" id="price" min="0" placeholder="enter product price" required
                class="box" value="{{ $products->price }}">
            <select name="category" id="category" class="box" required>
                <option selected>{{ $products->category }}</option>
                <option value="Vegetables">Vegetables</option>
                <option value="Fruits">Fruits</option>
                <option value="Meat">Meat</option>
                <option value="Fish">Fish</option>
            </select>
            <textarea name="details" id="details" required placeholder="enter product details" class="box" cols="30"
                rows="10">{{ $products->details }}</textarea>
            <input type="file" name="image" id="image" class="box"
                accept="image/jpg, image/jpeg, image/png, image/webp">
            <div class="flex-btn">
                <input type="submit" class="btn" value="update product" name="update_product">
                <a href="{{ url('/shop') }}" class="option-btn">go back</a>
            </div>
        </form>

    </section>
@endsection
