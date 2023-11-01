<header id="top" class="header-home">
        <div class="brand-panel">
            <a href="#top" class="brand js-target-scroll">
                <img class="brand-logo" src="{{ asset('img/ASG-logo.webp') }}" class="img-responsive" alt="logo">
            </a>
        </div>

        <!-- Navigation Desctop -->

        <nav class="navbar-desctop visible-md visible-lg">
            <div class="container">
                <a href="#top" class="brand js-target-scroll">
                    <img src="{{ asset('img/ASG-logo.webp') }}" width="30%" alt="logo">
                </a>
                <ul class="navbar-desctop-menu">

                    <li @if (Route::is('home')) class="active" @endif>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li
                    @if (Route::is('residential.one') || Route::is('residential.two') || Route::is('residential.three') || Route::is('residential.four')) class="active" @endif
                    >
                        <a href="#">Residential <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('residential.one') }}">Home Entertainment</a></li>
                            <li><a href="{{ route('residential.two') }}">Smart Home Automation</a></li>
                            <li><a href="{{ route('residential.three') }}">Lighting Energy Control</a></li>
                            <li><a href="{{ route('residential.four') }}">Security and Installation</a></li>
                        </ul>
                    </li>
                    <li
                    @if (Route::is('comercial.one') || Route::is('comercial.two') || Route::is('comercial.three') ) class="active" @endif>
                        <a href="#">Comercial<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('comercial.one') }}">Integrated Security</a></li>
                            <li><a href="{{ route('comercial.two') }}">Professional AV System</a></li>
                            <li><a href="{{ route('comercial.three') }}">IT & Structured Wiring</a></li>
                        </ul>
                    </li>
                    <li
                    @if (Route::is('marine.one') || Route::is('marine.two') || Route::is('marine.three') || Route::is('marine.four')) class="active" @endif>
                        <a href="#">Marine <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('marine.one') }}">Starlink Installations</a></li>
                            <li><a href="{{ route('marine.two') }}">KVH Partners</a></li>
                            <li><a href="{{ route('marine.three') }}">Audio Video Systems</a></li>
                            <li><a href="{{ route('marine.four') }}">Video Surveillance</a></li>
                        </ul>
                    </li>
                    <li @if (Route::is('about')) class="active" @endif>
                        <a href="{{ route('about') }}">About us</a>
                    </li>
                    <li @if (Route::is('blog')) class="active" @endif>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li >

                    <li @if (Route::is('contact')) class="active" @endif>
                        <a href="{{ route('contact') }}">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Navigation Mobile -->

        <nav class="navbar-mobile">
            <!-- Navbar Collapse -->
            <a class="brand js-target-scroll" href="#top">
            <img src= "{{ asset('img/ASG-logo.webp') }}" width="70%" alt="Brand">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="navbar-nav-mobile">
                <li @if (Route::is('home')) class="active" @endif>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li
                    @if (Route::is('residential.one') || Route::is('residential.two') || Route::is('residential.three') || Route::is('residential.four')) class="active" @endif
                    >
                        <a href="#">Residential <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('residential.one') }}">Home Entertainment</a></li>
                            <li><a href="{{ route('residential.two') }}">Smart Home Automation</a></li>
                            <li><a href="{{ route('residential.three') }}">Lighting Energy Control</a></li>
                            <li><a href="{{ route('residential.four') }}">Security and Installation</a></li>
                        </ul>
                    </li>
                    <li
                    @if (Route::is('comercial.one') || Route::is('comercial.two') || Route::is('comercial.three') ) class="active" @endif>
                        <a href="#">Comercial<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('comercial.one') }}">Integrated Security</a></li>
                            <li><a href="{{ route('comercial.two') }}">Professional AV System</a></li>
                            <li><a href="{{ route('comercial.three') }}">IT & Structured Wiring</a></li>
                        </ul>
                    </li>
                    <li
                    @if (Route::is('marine.one') || Route::is('marine.two') || Route::is('marine.three') || Route::is('marine.four')) class="active" @endif>
                        <a href="#">Marine <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('marine.one') }}">Starlink Installations</a></li>
                            <li><a href="{{ route('marine.two') }}">KVH Partners</a></li>
                            <li><a href="{{ route('marine.three') }}">Audio Video Systems</a></li>
                            <li><a href="{{ route('marine.four') }}">Video Surveillance</a></li>
                        </ul>
                    </li>
                    <li @if (Route::is('about')) class="active" @endif>
                        <a href="{{ route('about') }}">About us</a>
                    </li>
                    <li @if (Route::is('blog')) class="active" @endif>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li >

                    <li @if (Route::is('contact')) class="active" @endif>
                        <a href="{{ route('contact') }}">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
