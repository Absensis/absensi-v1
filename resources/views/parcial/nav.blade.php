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
                            <a href="work.html">Recap schedule</a>
                            <ul class="dropdown" style="width: 200px;">
                                <li><a href="{{ route('listschedule')}}">
                                        Last schedule</a></li>
                                <li><a href="work-grid-without-text.html">
                                        Today schedule</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="work.html">Teacher</a>
                            <ul class="dropdown">
                                <li><a href="work-grid.html">
                                        List teacher</a></li>
                                <li><a href="work-grid-without-text.html">
                                        Data teacher</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('/lesson') ? 'active' : '' }}"><a href="{{ url('/lesson') }}">Lesson</a></li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="has-dropdown">
                            <a style="font-size: 17px;"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <ul class="dropdown" style="width: 230px; left: -23px; padding: 15px; padding-left: 25px;">
                                <li>
                                    <label style="font-size: 10px"><b>{{ Auth::user()->name }}</b></label>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-user" aria-hidden="true"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                                    </a>
                                </li>
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
