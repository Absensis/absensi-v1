<footer id="colorlib-footer">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 colorlib-widget" style="margin-right: 10%; margin-left: 10%;">
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
                @guest
                <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="{{ url('/') }}"><i class="icon-check"></i> Home</a></li>
                        <li><a href="{{ url('/about') }}"><i class="icon-check"></i> About</a></li>
                    </ul>
                </p>
                @else
                <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="#"><i class="icon-check"></i> Home</a></li>
                        <li><a href="#"><i class="icon-check"></i> Last Schedule</a></li>
                        <li><a href="#"><i class="icon-check"></i> Today Schedule</a></li>
                        <li><a href="#"><i class="icon-check"></i> Teacher Data</a></li>
                        <li><a href="#"><i class="icon-check"></i> Lesson</a></li>
                        <li><a href="#"><i class="icon-check"></i> About</a></li>
                    </ul>
                </p>
                @endguest
            </div>

            <div class="col-md-3 colorlib-widget">
                <h4>Contact Info</h4>
                <ul class="colorlib-footer-links">
                    <li>Depok Jawa Barat, <br> SMK TARUNA BHAKTI</li>
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
                        </script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Us</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.<br>
                        Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
