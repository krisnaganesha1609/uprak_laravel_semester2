@extends('layouts.components.admin_main')
@section('admin-content')
    @include('layouts.components.header')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="add-products">

        <h1 class="title">add new product</h1>

        <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex">
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="box" required
                        placeholder="enter product name">
                    <select name="category" id="category" class="box" required>
                        <option value="" selected disabled>select category</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Fruits">Fruits</option>
                        <option value="Meat">Meat</option>
                        <option value="Fish">Fish</option>
                    </select>
                </div>
                <div class="inputBox">
                    <input type="number" min="0" name="price" id="price" class="box" required
                        placeholder="enter product price">
                    <input type="file" name="image" id="image" required class="box"
                        accept="image/jpg, image/jpeg, image/png, image/webp">
                </div>
            </div>
            <textarea name="details" id="details" class="box" required placeholder="enter product details" cols="30"
                rows="10"></textarea>
            <input type="submit" class="btn" value="add product" name="add_product">
        </form>

    </section>
@endsection
