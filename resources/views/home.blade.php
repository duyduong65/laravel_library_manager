@extends('layouts.app')
@section('content')
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
                        <li><a href="contact.html">Contact</a></li>

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

    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row small-gutters">
                    <div class="col-lg-8 top-post-left">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"
                                 src="img/conan_2.jpg"
                                 alt="">
                        </div>
                        <div class="top-post-details">
                            <a href="image-post.html">
                                <h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 top-post-right">
                        <div class="single-top-post">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/top-post2.jpg" alt="">
                            </div>
                            <div class="top-post-details">
                                <a href="image-post.html">
                                    <h4>A Discount Toner Cartridge Is Better Than Ever.</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-top-post mt-10">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/top-post3.jpg" alt="">
                            </div>
                            <div class="top-post-details">
                                <a href="image-post.html">
                                    <h4>A Discount Toner Cartridge Is Better</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            <h4 class="cat-title">Latest News</h4>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/nuhoangaicap_33.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt.
                                    </p>
                                </div>
                            </div>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/l2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt.
                                    </p>
                                </div>
                            </div>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/l3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt.
                                    </p>
                                </div>
                            </div>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/l4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End latest-post Area -->

                        <!-- Start banner-ads Area -->
                        <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                            <img class="img-fluid" src="img/banner-ad.jpg" alt="">
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="sidebars-area">
                            <div class="single-sidebar-widget editors-pick-widget">
                                <h6 class="title">Editor’s Pick</h6>
                                <div class="editors-pick-post">
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="img/e1.jpg" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h4 class="mt-20">A Discount Toner Cartridge Is
                                                Better Than Ever.</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April,
                                                    2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                        </ul>
                                        <p class="excert">
                                            Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod
                                            tempor incididunt ed do eius.
                                        </p>
                                    </div>
                                    <div class="post-lists">
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="img/e2.jpg" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html"><h6>Help Finding Information
                                                        Online is so easy</h6></a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April,
                                                            2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="img/e3.jpg" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html"><h6>Compatible Inkjet Cartr
                                                        world famous</h6></a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April,
                                                            2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="img/e4.jpg" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html"><h6>5 Tips For Offshore Soft
                                                        Development </h6></a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April,
                                                            2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget ads-widget">
                                <img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>

    <!-- start footer Area -->
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
                    All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
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
@endsection
