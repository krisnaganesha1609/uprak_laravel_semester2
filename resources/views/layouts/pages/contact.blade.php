@extends('layouts.components.main')
@section('title')
    Contact
@endsection
@section('content')
    @include('layouts.components.header')

    <section class="contact">

        <h1 class="title">get in touch</h1>

        <form action="" method="POST">
            <input type="text" name="name" class="box" required placeholder="enter your name">
            <input type="email" name="email" class="box" required placeholder="enter your email">
            <input type="number" name="number" min="0" class="box" required placeholder="enter your number">
            <textarea name="msg" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn" name="send">
        </form>

    </section>
    @include('layouts.components.footer')
@endsection
