<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset('"css/nice-select.css"')}}">
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">

</head>
<body>
<div class="container">
    <main class="py-4">
        <header>
            <div class="container main-menu" id="main-menu">
                <div class="row align-items-center justify-content-between">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="{{route("home")}}">Home</a></li>
                            <li><a href="archive.html">Archive</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li class="menu-has-children"><a href="">Post Types</a>
                                <ul>
                                    <li><a href="standard-post.html">Standard Post</a></li>
                                    <li><a href="image-post.html">Image Post</a></li>
                                    <li><a href="gallery-post.html">Gallery Post</a></li>
                                    <li><a href="video-post.html">Video Post</a></li>
                                    <li><a href="audio-post.html">Audio Post</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            @can('admin')
                                <li><a href="{{route('librarians.dashboard')}}">
                                        <i class="fa fa-user"></i>
                                        User</a></li>
                            @endcan
                        </ul>
                    </nav><!-- #nav-menu-container -->
                    <div class="navbar-right">
                        <form class="Search">
                            <input type="text" class="form-control Search-box" name="Search-box" id="Search-box"
                                   placeholder="Search">
                            <label for="Search-box" class="Search-box-label">
                                <span class="lnr lnr-magnifier"></span>
                            </label>
                            <span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
                        </form>
                    </div>
                    <div class="navbar-rigt">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret">
                                        <img src="{{asset('storage/'.Auth::user()->avatar)}}" class="img-fluid"
                                             width="30px" alt="">
                                    </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Top Products</h4>
                        <ul>
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Power Tools</a></li>
                            <li><a href="#">Marketing Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Features</h4>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Agencies</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Instragram Feed</h4>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src={{asset("js/easing.min.js")}}></script>
<script src={{asset("js/hoverIntent.js")}}></script>
<script src={{asset("js/superfish.min.js")}}></script>
<script src={{asset("js/jquery.ajaxchimp.min.js")}}></script>
<script src={{asset("js/jquery.magnific-popup.min.js")}}></script>
<script src={{asset("js/mn-accordion.js")}}></script>
<script src={{asset("js/jquery-ui.js")}}></script>
<script src={{asset("js/jquery.nice-select.min.js")}}></script>
<script src={{asset("js/owl.carousel.min.js")}}></script>
<script src={{asset("js/mail-script.js")}}></script>
<script src={{asset("js/main.js")}}></script>
</html>
