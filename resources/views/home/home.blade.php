@extends('layouts.main')

@section('content')

<section id="home" class="video-hero" style="height: 700px; background-image: url(bg/bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <!-- <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>  -->
    <div class="display-t text-center">
        <div class="display-tc">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2 style="margin-bottom: 50px;">This website is made to see timesheet recaps every time<span style="color: greenyellow;">.</span></h2>
                        <p><a href="{{ route('about')}}" class="btn btn-primary btn-lg btn-custom">Get to know more..</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-featured">
    <div class="row animate-box">
        <div class="featured-wrap">
            <div class="owl-carousel">
                <div class="item">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="featured-entry">
                            <img class="img-responsive" src="{{ asset('asset/bg1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="featured-entry">
                            <img class="img-responsive" src="{{ asset('asset/bg2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="featured-entry">
                            <img class="img-responsive" src="{{ asset('asset/bg3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-services colorlib-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-office"></i>
                    </span>
                    <div class="desc">
                        <h3>
                            Integrated with existing data
                        </h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-clock"></i>
                    </span>
                    <div class="desc">
                        <h3>Shows attendance schedule</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2>Collaborate with your design team in a new way</h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                    unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                    decided to leave for the far World of Grammar.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <span class="play"><a href="https://www.youtube.com/watch?v=NJpEjQb8wA8" class="pulse popup-vimeo"><i class="icon-play3"></i></a></span>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-work-featured colorlib-bg-white">
    <div class="container">
        <div class="row mobile-wrap">
            <div class="col-md-5 animate-box">
                <div class="mobile-img" style="background-image: url(images/mobile-2.jpg);"></div>
            </div>
            <div class="col-md-7 animate-box">
                <div class="desc">
                    <h2>Real template creation</h2>
                    <div class="features">
                        <span class="icon"><i class="icon-lightbulb"></i></span>
                        <div class="f-desc">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                    <div class="features">
                        <span class="icon"><i class="icon-circle-compass"></i></span>
                        <div class="f-desc">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                almost unorthographic life One day however a small line of blind text by the
                                name</p>
                        </div>
                    </div>
                    <div class="features">
                        <span class="icon"><i class="icon-beaker"></i></span>
                        <div class="f-desc">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                    <p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
                </div>
            </div>
        </div>
        <div class="row mobile-wrap">
            <div class="col-md-5 col-md-push-7 animate-box">
                <div class="mobile-img" style="background-image: url(images/mobile-1.jpg);"></div>
            </div>
            <div class="col-md-7 col-md-pull-5 animate-box">
                <div class="desc">
                    <h2>Finish template creation</h2>
                    <div class="features">
                        <span class="icon"><i class="icon-lightbulb"></i></span>
                        <div class="f-desc">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                    <div class="features">
                        <span class="icon"><i class="icon-circle-compass"></i></span>
                        <div class="f-desc">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                almost unorthographic life One day however a small line of blind text by the
                                name</p>
                        </div>
                    </div>
                    <div class="features">
                        <span class="icon"><i class="icon-beaker"></i></span>
                        <div class="f-desc">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                    <p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(bg/bg.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 col-sm-4 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-ribbon"></i></span>
                        <div class="desc">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="1500" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Of customers are satisfied with our
                                professional support</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-church"></i></span>
                        <div class="desc">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Amazing preset options to be mixed and
                                combined</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-dove"></i></span>
                        <div class="desc">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="1200" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Average response time on live chat support
                                channel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2>Latest News</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box">
                <article>
                    <h2>Building the Mention Sales Application on Unapp</h2>
                    <p class="admin"><span>May 12, 2018</span></p>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life</p>
                    <p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person1.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
                </article>
            </div>
            <div class="col-md-4 animate-box">
                <article>
                    <h2>Building the Mention Sales Application on Unapp</h2>
                    <p class="admin"><span>May 12, 2018</span></p>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life</p>
                    <p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person2.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
                </article>
            </div>
            <div class="col-md-4 animate-box">
                <article>
                    <h2>Building the Mention Sales Application on Unapp</h2>
                    <p class="admin"><span>May 12, 2018</span></p>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life</p>
                    <p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person3.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
                </article>
            </div>
        </div>
    </div>
</div>

@endsection
