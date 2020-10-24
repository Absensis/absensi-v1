<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div id="colorlib-logo"><a href="index.html">{{ config('app.name', 'Laravel') }}</a></div>
                </div>
                @guest
                <div class="col-md-10 text-right menu-1">
                    <ul>
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="contact.html"></a></li>
                        <li class="btn" style="background-color: #42e6a4; padding: 10px; margin-right: 10px; margin-left: -20px;"><a href="{{ route('login') }}" style="font-size: 15px;"><b>Login</b></a></li>
                        <li class="btn" style="background-color: #0278ae;  padding: 10px;"><a href="{{ route('register')}}" style="font-size: 15px;"><b>Register</b></a></li>
                    </ul>
                </div>
                @else
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
                        <li class="has-dropdown">
                            <a style="font-size: 15px;"><b>{{ Auth::user()->name }}</b></a>
                            <ul class="dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
