<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js')}}"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="colorlib-logo"><a href="index.html">{{ config('app.name', 'Laravel') }}</a></div>
                        </div>
                        <div class="col-md-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="work.html">Timesheet recap</a>
                                    <ul class="dropdown">
                                        <li><a href="work-grid.html">Works grid with text</a></li>
                                        <li><a href="work-grid-without-text.html">Works grid w/o text</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section id="home" class="video-hero" style="height: 700px; background-image: url(bg/bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
            <div class="overlay"></div>
            <!-- <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>  -->
            <div class="display-t text-center">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-12 col-md-offset-0">
                            <div class="animate-box">
                                <h2 style="margin-bottom: 50px;">This website is made to see timesheet recaps every time<span style="color: greenyellow;">.</span></h2>
                                <p><a href="gallery.html" class="btn btn-primary btn-lg btn-custom">Get to know more..</a></p>
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
                                    <img class="img-responsive" src="images/dashboard_full_1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="featured-entry">
                                    <img class="img-responsive" src="images/dashboard_full_2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="featured-entry">
                                    <img class="img-responsive" src="images/dashboard_full_3.jpg" alt="">
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
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-browser"></i>
                            </span>
                            <div class="desc">
                                <h3>Create your own template</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-download"></i>
                            </span>
                            <div class="desc">
                                <h3>Automatic Backup Data</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-layers"></i>
                            </span>
                            <div class="desc">
                                <h3>Page Builder</h3>
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
                        <span class="play"><a href="https://vimeo.com/channels/staffpicks/93951774" class="pulse popup-vimeo"><i class="icon-play3"></i></a></span>
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

        <footer id="colorlib-footer">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>About {{ config('app.name', 'Laravel') }}</h4>
                        <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they
                            live in Bookmarksgrove right at the coast of the Semantics</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-3 colorlib-widget">
                        <h4>Information</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#"><i class="icon-check"></i> Home</a></li>
                                <li><a href="#"><i class="icon-check"></i> Gallery</a></li>
                                <li><a href="#"><i class="icon-check"></i> About</a></li>
                                <li><a href="#"><i class="icon-check"></i> Blog</a></li>
                                <li><a href="#"><i class="icon-check"></i> Contact</a></li>
                                <li><a href="#"><i class="icon-check"></i> Privacy</a></li>
                            </ul>
                        </p>
                    </div>

                    <div class="col-md-3 colorlib-widget">
                        <h4>Recent Blog</h4>
                        <div class="f-blog">
                            <a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
                            </a>
                            <div class="desc">
                                <h2><a href="blog.html">Photoshoot Technique</a></h2>
                                <p class="admin"><span>30 March 2018</span></p>
                            </div>
                        </div>
                        <div class="f-blog">
                            <a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
                            </a>
                            <div class="desc">
                                <h2><a href="blog.html">Camera Lens Shoot</a></h2>
                                <p class="admin"><span>30 March 2018</span></p>
                            </div>
                        </div>
                        <div class="f-blog">
                            <a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
                            </a>
                            <div class="desc">
                                <h2><a href="blog.html">Imahe the biggest photography studio</a></h2>
                                <p class="admin"><span>30 March 2018</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 colorlib-widget">
                        <h4>Contact Info</h4>
                        <ul class="colorlib-footer-links">
                            <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li><a href="tel://1234567920"><i class="icon-phone"></i> + 62 812 1351 7643</a></li>
                            <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> farasjibran@gmail.com</a>
                            </li>
                            <li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br>
                                Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
    <!-- YTPlayer -->
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/magnific-popup-options.js')}}"></script>
    <!-- Counters -->
    <script src="{{ asset('js/jquery.countTo.js')}}"></script>
    <!-- Main -->
    <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>
