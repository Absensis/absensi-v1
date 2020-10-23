<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div id="colorlib-logo"><a href="index.html">{{ config('app.name', 'Laravel') }}</a></div>
                </div>
                <div class="col-md-10 text-right menu-1">
                    <ul>
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="has-dropdown">
                            <a href="work.html">Timesheet recap</a>
                            <ul class="dropdown">
                                <li><a href="work-grid.html">
                                        Last schedule</a></li>
                                <li><a href="work-grid-without-text.html">
                                        Schedule today</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
