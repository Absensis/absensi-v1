@extends('layouts.main')

@section('content')

<section id="home" class="video-hero" style="height: 350px; background-image: url(bg/bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                </div>
            </div>
        </div>
    </div>
</section>


<div class="colorlib-featured" style="margin-bottom: 20px;">
    <div class="gambaruser" style="position: relative; margin-left: 43%; margin-top: -7%;">
        <img src="{{ asset('asset/user.png')}}" alt="gambar user" width="25%" style="border-radius: 50%; box-shadow: 0px 3px 19px -9px rgba(0, 0, 0, 0.75);">
        <p style="margin-top: 3%; margin-bottom: -1px; margin-left: -18px; font-size: 20px;"><b>{{ Auth::user()->name }}</b></p>
        <p style="margin-left: 2%;">{{ Auth::user()->email }}</p>
    </div>
</div>


@endsection
