@extends('template.index')

@section('content')

<section id="home" class="video-hero" style="height: 500px; background-image: url(bg/bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>About {{ config('app.name', 'Laravel') }}</h2>
                        <p class="breadcrumbs"><span><a href="{{ url('/')}}">Home</a></span> <span>About</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-about">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-6 animate-box">
                <div class="video colorlib-video" style="background-image: url(images/about.jpg);">
                    <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play3"></i></a>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <h2>About {{ config('app.name', 'Laravel') }}</h2>
                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2>Behind this website</h2>
                <p>
                    the following are the names of the people behind this attendance website.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="staff-entry">
                    <a href="#" class="staff-img" style="background-image: url(images/person1.jpg);"></a>
                    <div class="desc">
                        <h3>Muhammad Farras Jibran</h3>
                        <span>Front-end Developer</span>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="staff-entry">
                    <a href="#" class="staff-img" style="background-image: url(images/person2.jpg);"></a>
                    <div class="desc">
                        <h3>Akmal Permata Sukma</h3>
                        <span>Back-end Developer</span>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="staff-entry">
                    <a href="#" class="staff-img" style="background-image: url(images/person3.jpg);"></a>
                    <div class="desc">
                        <h3>Fauzan Adli</h3>
                        <span>Designer</span>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center animate-box">
                <div class="staff-entry">
                    <a href="#" class="staff-img" style="background-image: url(images/person4.jpg);"></a>
                    <div class="desc">
                        <h3>Syahdah Hamidah</h3>
                        <span>Analiys</span>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center animate-box">
                <div class="staff-entry">
                    <a href="#" class="staff-img" style="background-image: url(images/person4.jpg);"></a>
                    <div class="desc">
                        <h3>Jerry Yusuf Simbolon</h3>
                        <span>Analiys</span>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
