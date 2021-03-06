@extends('layouts.master')

@section('content')
<!-- Start page content -->
<section class="service-area gray-bg ptb-110">
    <!-- Demo Section    -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="service-all white-bg">
                    <h2>We Have 65 Years <br>Experience In This Passion</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="service-left">
                                <div class="offer-icon">
                                    <i class="icofont icofont-support"></i>
                                </div>
                                <div class="offer-text">
                                    <h3>Quick Help</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-left mrg-xs">
                                <div class="offer-icon">
                                    <i class="icofont icofont-world"></i>
                                </div>
                                <div class="offer-text">
                                    <h3>In Your Country</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-left service-mrg mrg-xs">
                                <div class="offer-icon">
                                    <i class="icofont icofont-gift"></i>
                                </div>
                                <div class="offer-text">
                                    <h3>Scholarship For Students</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-left service-mrg mrg-xs">
                                <div class="offer-icon">
                                    <i class="icofont icofont-football-american"></i>
                                </div>
                                <div class="offer-text">
                                    <h3>Sports & Events</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-from navy-bg">
                    <h3>Courses Search</h3>
                    <form class="ordering">
                        <div class="orderby-wrapper">
                            <label>Select Degree*</label>
                            <select name="orderby" class="orderby">
                                <option value="menu_order">GED</option>
                                <option value="popularity" selected='selected'>HS Diploma</option>
                                <option value="rating">Associate Degree</option>
                                <option value="date">Bachelor's Degree</option>
                                <option value="price">Master's Degree</option>
                                <option value="price-desc">Doctorate/Prof Degree</option>
                            </select>
                        </div>
                        <div class="orderby-wrapper mrg-chosen">
                            <label>Ceategory*</label>
                            <select name="orderby" class="orderby">
                                <option value="menu_order">GED</option>
                                <option value="popularity" selected='selected'>HS Diploma</option>
                                <option value="rating">Associate Degree</option>
                                <option value="date">Bachelor's Degree</option>
                                <option value="price">Master's Degree</option>
                                <option value="price-desc">Doctorate/Prof Degree</option>
                            </select>
                        </div>
                        <div class="orderby-wrapper">
                            <label>Subject*</label>
                            <select name="orderby" class="orderby">
                                <option value="menu_order">GED</option>
                                <option value="popularity" selected='selected'>HS Diploma</option>
                                <option value="rating">Associate Degree</option>
                                <option value="date">Bachelor's Degree</option>
                                <option value="price">Master's Degree</option>
                                <option value="price-desc">Doctorate/Prof Degree</option>
                            </select>
                        </div>
                        <div class="chosen-submit text-center">
                            <a class="button extra-small" href="#">
                                <span>search</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="banner-blog-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="hidden-md col-lg-3 col-sm-6">
                <div class="banner-img">
                    <img src="{{ Theme::asset('img/banner/1.jpg') }}" alt="" >
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/1.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details">
                        <h3><a href="#">Political Science</a></h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <a href="#"><i class="icofont icofont-eye"></i> 34</a>
                            </span>
                            <span class="published4">
                                <a href="#"><i class="icofont icofont-comment"></i> 20</a>
                            </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Learn Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-sm mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/2.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details">
                        <h3><a href="#">Micro Biology</a></h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <a href="#"><i class="icofont icofont-eye"></i> 34</a>
                            </span>
                            <span class="published4">
                                <a href="#"><i class="icofont icofont-comment"></i> 20</a>
                            </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Learn Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-sm mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/3.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details">
                        <h3><a href="#">Computer Science</a></h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <a href="#"><i class="icofont icofont-eye"></i> 34</a>
                            </span>
                            <span class="published4">
                                <a href="#"><i class="icofont icofont-comment"></i> 20</a>
                            </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Learn Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="countdown-area bg-1 ptb-110 bg-opacity bg-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12 text-center">
                <div class="countdown-all">
                    <h3>Get 100 of online courses for free </h3>
                    <h1>Register Now</h1>
                    <div class="timer">
                        <div data-countdown="2019/01/01"></div>
                    </div>  
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="register-from">
                    <h3>Fil The Register Form</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicng elit, sed do eiusmod tempor </p>
                    <form class="ordering">
                        <input required="" placeholder="Your Name*" type="text">
                        <input class="form-control2" required="" placeholder="Email Address*" type="email">
                        <div class="orderby-wrapper">
                            <select name="orderby" class="orderby">
                                <option value="menu_order">Courses*</option>
                                <option value="popularity" selected='selected'>HS Diploma</option>
                                <option value="rating">Associate Degree</option>
                                <option value="date">Bachelor's Degree</option>
                                <option value="price">Master's Degree</option>
                                <option value="price-desc">Doctorate/Prof Degree</option>
                            </select>
                        </div>
                        <div class="sent text-center">
                            <button class="submit" type="submit">
                                submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="event-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-60">
                    <h1 class="uppercase">Upcoming Events</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="event-text-img">
                    <div class="event-img3">
                        <a href="#"><img src="{{ Theme::asset('img/blog/4.jpg') }}" alt=""></a>
                        <div class="event-date">
                            <span class="tb-publish">25</span>
                            <span class="tb-publish2">Oct</span>
                        </div>
                    </div>
                    <div class="visual-inner">
                        <h3 class="blog-title">
                            <a href="#">Become a Product Manage</a>
                        </h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <i class="icofont icofont-clock-time"></i>
                                08 am to 12 pm
                            </span>
                            <span class="published4">
                                <i class="icofont icofont-social-google-map"></i>
                                T House USA
                            </span>
                        </div>
                        <div class="blog-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore p aliqua. Ut enim ad minim veniam,</p>
                        </div>
                        <div class="readmore">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="event-text-img mrg-sm2 mrg-xs4">
                    <div class="event-img3">
                        <a href="#"><img src="{{ Theme::asset('img/blog/5.jpg') }}" alt=""></a>
                        <div class="event-date">
                            <span class="tb-publish">22</span>
                            <span class="tb-publish2">Oct</span>
                        </div>
                    </div>
                    <div class="visual-inner">
                        <h3 class="blog-title">
                            <a href="#">Become a Product Manage</a>
                        </h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <i class="icofont icofont-clock-time"></i>
                                08 am to 12 pm
                            </span>
                            <span class="published4">
                                <i class="icofont icofont-social-google-map"></i>
                                T House USA
                            </span>
                        </div>
                        <div class="blog-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore p aliqua. Ut enim ad minim veniam,</p>
                        </div>
                        <div class="readmore">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="event-text-img mt-40">
                    <div class="event-img3">
                        <a href="#"><img src="{{ Theme::asset('img/blog/6.jpg') }}" alt=""></a>
                        <div class="event-date">
                            <span class="tb-publish">27</span>
                            <span class="tb-publish2">Oct</span>
                        </div>
                    </div>
                    <div class="visual-inner">
                        <h3 class="blog-title">
                            <a href="#">Political Science</a>
                        </h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <i class="icofont icofont-clock-time"></i>
                                08 am to 12 pm
                            </span>
                            <span class="published4">
                                <i class="icofont icofont-social-google-map"></i>
                                T House USA
                            </span>
                        </div>
                        <div class="blog-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore p aliqua. Ut enim ad minim veniam,</p>
                        </div>
                        <div class="readmore">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="event-text-img mt-40">
                    <div class="event-img3">
                        <a href="#"><img src="{{ Theme::asset('img/blog/7.jpg') }}" alt=""></a>
                        <div class="event-date">
                            <span class="tb-publish">29</span>
                            <span class="tb-publish2">Oct</span>
                        </div>
                    </div>
                    <div class="visual-inner">
                        <h3 class="blog-title">
                            <a href="#">Coumputer Science</a>
                        </h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <i class="icofont icofont-clock-time"></i>
                                08 am to 12 pm
                            </span>
                            <span class="published4">
                                <i class="icofont icofont-social-google-map"></i>
                                T House USA
                            </span>
                        </div>
                        <div class="blog-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore p aliqua. Ut enim ad minim veniam,</p>
                        </div>
                        <div class="readmore">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center pt-110 mb-60">
                    <h1 class="uppercase">Academic News</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="news-are">
                    <div class="news-img">
                        <img src="{{ Theme::asset('img/blog/8.jpg') }}" alt="" >
                        <div class="news-date navy-bg">
                            <div class="blog-meta-2">
                                <span class="published3">
                                    <i class="icofont icofont-ui-calendar"></i>
                                    14 Sep 2016
                                </span>
                            </div>
                            <div class="blog-meta for-news">
                                <span class="published3">
                                    <a href="#">
                                        <i class="icofont icofont-eye"></i> 34
                                    </a>
                                </span>
                                <span class="published4">
                                    <a href="#">
                                        <i class="icofont icofont-comment"></i> 20
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="img-text gray-bg">
                        <h3><a href="#">Testing is a great thing</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <a class="button extra-small" href="#">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="news-are mrg-xs">
                    <div class="news-img">
                        <img src="{{ Theme::asset('img/blog/9.jpg') }}" alt="" >
                        <div class="news-date navy-bg">
                            <div class="blog-meta-2">
                                <span class="published3">
                                    <i class="icofont icofont-ui-calendar"></i>
                                    14 Sep 2016
                                </span>
                            </div>
                            <div class="blog-meta for-news">
                                <span class="published3">
                                    <a href="#">
                                        <i class="icofont icofont-eye"></i> 34
                                    </a>
                                </span>
                                <span class="published4">
                                    <a href="#">
                                        <i class="icofont icofont-comment"></i> 20
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="img-text gray-bg">
                        <h3><a href="#">A variation of the ordinary lor</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <a class="button extra-small" href="#">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm">
                <div class="news-are mrg-xs">
                    <div class="news-img">
                        <img src="{{ Theme::asset('img/blog/10.jpg') }}" alt="" >
                        <div class="news-date navy-bg">
                            <div class="blog-meta-2">
                                <span class="published3">
                                    <i class="icofont icofont-ui-calendar"></i>
                                    14 Sep 2016
                                </span>
                            </div>
                            <div class="blog-meta for-news">
                                <span class="published3">
                                    <a href="#">
                                        <i class="icofont icofont-eye"></i> 34
                                    </a>
                                </span>
                                <span class="published4">
                                    <a href="#">
                                        <i class="icofont icofont-comment"></i> 20
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="img-text gray-bg">
                        <h3><a href="#">In publishing and graphic desi</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <a class="button extra-small" href="#">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="button extra-small news-btn mt-60" href="#">
                    <span>View All News</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="counter-area bg-2 bg-opacity bg-relative ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 text-center">
                <div class="counter-bottom2">
                    <div class="counter-img">
                        <img src="{{ Theme::asset('img/icons/1.png') }}" alt="" >
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Teachers</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>34</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{ Theme::asset('img/icons/2.png') }}" alt="" >
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Students</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>3554</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{ Theme::asset('img/icons/3.png') }}" alt="" >
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Research</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>354</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{ Theme::asset('img/icons/4.png') }}" alt="" >
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Awards</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>44</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="testimonial-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="testimonial-text">
                    <h2>Our Student Say</h2>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="slider-active2">
                    <div class="testimonial-all">
                        <div class="testimonial-peragraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu
nt ut la et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla
mlaboris nisi ut aliquip ex ea commodo conseq</p>
                        </div>
                        <div class="testimonial-img">
                            <img alt="" src="{{ Theme::asset('img/banner/2.jpg') }}" >
                            <div class="img-title navy-bg">
                                <h3>Al-Rayed</h3>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-all">
                        <div class="testimonial-peragraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu
nt ut la et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla
mlaboris nisi ut aliquip ex ea commodo conseq</p>
                        </div>
                        <div class="testimonial-img">
                            <img alt="" src="{{ Theme::asset('img/banner/2.jpg') }}" >
                            <div class="img-title navy-bg">
                                <h3>Al-Mamun</h3>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-all">
                        <div class="testimonial-peragraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu
nt ut la et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla
mlaboris nisi ut aliquip ex ea commodo conseq</p>
                        </div>
                        <div class="testimonial-img">
                            <img alt="" src="{{ Theme::asset('img/banner/2.jpg') }}" >
                            <div class="img-title navy-bg">
                                <h3>Al-Mamun</h3>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End page content -->
@stop
