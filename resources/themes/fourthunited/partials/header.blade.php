
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header class="header-area">
            <div class="header-top navy-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="header-top-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-ui-call"></i>
                                            Hotline  (+123) 45 67 89 21
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-envelope"></i>
                                            murtala92@gmail.com
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-top-right f-right">
                                <div class="header-top-social f-right">
                                    <p>Follow Us :</p>
                                    <ul>
                                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-github"></i></a></li>
                                    </ul>
                                </div>
                                <div class="header-top-language f-left">
                                    <ul>
                                        <li><a href="#" data-toggle="dropdown">English<i class="icofont icofont-simple-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">English</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom stick-h2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="index.html"><img src="{{ Theme::asset('img/logo/logo.png') }}" alt=""> </a>
                            </div>
                        </div>
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <div class="menu-area f-right">
                                <nav>
                                    <ul>
                                        <li><a href="{{ url('home') }}">Home </a></li>
                                        <li class="coloumn-one"><a href="{{ url('about') }}">About Us <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="{{ url('organization_structure') }}">Organization Structure  </a></li>
                                                <li><a href="{{ url('organizer') }}">Organizer  </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('member') }}">Member  </a></li>
                                        <li><a href="{{ url('blog') }}">Blog  </a></li>
                                        <li><a href="{{ url('event') }}">Event  </a></li>
                                        <li class="coloumn-one"><a href="#">Gallery <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="{{ url('album') }}">Foto  </a></li>
                                                <li><a href="{{ url('video') }}">Video  </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('career') }}">Career  </a></li>
                                        <li><a href="{{ url('contact') }}">Contact </a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="{{ url('home') }}">Home </a></li>
                                    <li><a href="{{ url('about') }}">About Us  </a></li>
                                    <li><a href="{{ url('member') }}">Member  </a></li>
                                    <li><a href="{{ url('blog') }}">Blog  </a></li>
                                    <li><a href="{{ url('event') }}">Event  </a></li>
                                    <li><a href="{{ url('album') }}">Album  </a></li>
                                    <li><a href="{{ url('career') }}">Career  </a></li>
                                    <li><a href="{{ url('contact') }}">Contact </a></li>
                                </ul>
                            </nav>
                        </div>					
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->
        <!-- End of header area -->
        <section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">{{ $page_title or "Page Title" }}</h2>
                            {!! $breadcrumbs !!}                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start of slider area -->
        <!-- <div class="slider-area">
        <div class="slider-active">
            <div class="slider-all">
                <img src="{{ Theme::asset('img/slider/1.jpg') }}" alt="">
                <div class="slider-text-wrapper">
                    <div class="table">
                        <div class="table-cell">
                            <div class="slider-text animated">
                                <h1>Education For Everyone</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> aliqua.  minim veniam, quis nostrud exercitation ullamco </p>
                                <a class="button extra-small mb-20" href="#">
                                    <span>Apply Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-all">
                <img src="{{ Theme::asset('img/slider/1.jpg') }}" alt="">
                <div class="slider-text-wrapper">
                    <div class="table">
                        <div class="table-cell">
                            <div class="slider-text animated">
                                <h1>Education For Everyone</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> aliqua.  minim veniam, quis nostrud exercitation ullamco </p>
                                <a class="button extra-small mb-20" href="#">
                                    <span>Apply Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-all">
                <img src="{{ Theme::asset('img/slider/1.jpg') }}" alt="">
                <div class="slider-text-wrapper">
                    <div class="table">
                        <div class="table-cell">
                            <div class="slider-text animated">
                                <h1>Education For Everyone</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> aliqua.  minim veniam, quis nostrud exercitation ullamco </p>
                                <a class="button extra-small mb-20" href="#">
                                    <span>Apply Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> -->
        <!-- End of slider area --> 