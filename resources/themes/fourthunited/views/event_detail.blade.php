@extends('layouts.master')

@section('content')
<!-- Start page content -->
<section class="events-details-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="events-details-right-sidebar">
                    <div class="events-details-img1">
                        <h3>Become a Product Manage</h3>
                        <img alt="" src="{{ Theme::asset('images/banner/6.jpg') }}" >
                    </div>
                    <div class="events-details-all">
                        <div class="events-details-time">
                            <div class="time-icon">
                                <i class="icofont icofont-clock-time"></i>
                            </div>
                            <div class="time-text">
                                <span>Start Time</span>
                                <p class="time-mrg">10:00 am</p>
                                <p>Sunday,July 08,2016</p>
                            </div>
                        </div>
                        <div class="events-details-time mrg-xs">
                            <div class="time-icon">
                                <i class="icofont icofont-flag"></i>
                            </div>
                            <div class="time-text">
                                <span>Start Time</span>
                                <p class="time-mrg">04:30 pm</p>
                                <p>Monday,July 09,2016</p>
                            </div>
                        </div>
                        <div class="events-details-time mrg-xs">
                            <div class="time-icon">
                                <i class="icofont icofont-social-google-map"></i>
                            </div>
                            <div class="time-text">
                                <span>Address</span>
                                <p class="time-mrg">10:00 am</p>
                                <p>Monday,July 08,2016</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-lectures">
                        <h3>Event Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="event-content">
                        <h3 class="content2">Event Content</h3>
                        <ul>
                            <li>Over 40 lectures and 60 hours of content</li>
                            <li>Live Project End to End Software Testing Training Included</li>
                            <li>Information packed practical training starting from basics to advanced testing techniques.</li>
                            <li>Course content designed by considering current software testing technology and the job market.</li>
                            <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                            <li>Practical assignments at the end of every session.</li>
                        </ul>
                    </div>
                    <div class="event-participants">
                        <h3 class="content2">Event Participants</h3>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="participants-details text-center">
                                    <a href="#">
                                        <img src="{{ Theme::asset('images/banner/11.jpg') }}" alt="">
                                    </a>
                                    <h3>T Rayed</h3>
                                    <p>Chif Principal</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="participants-details text-center">
                                    <a href="#">
                                        <img src="{{ Theme::asset('images/banner/12.jpg') }}" alt="">
                                    </a>
                                    <h3>S Tasnim</h3>
                                    <p>Head Teacher</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="participants-details text-center mrg-xs">
                                    <a href="#">
                                        <img src="{{ Theme::asset('images/banner/13.jpg') }}" alt="">
                                    </a>
                                    <h3>FH Shuvo</h3>
                                    <p>Chif Principal</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="participants-details text-center mrg-xs">
                                    <a href="#">
                                        <img src="{{ Theme::asset('images/banner/14.jpg') }}" alt="">
                                    </a>
                                    <h3>Lalen</h3>
                                    <p>Head Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="events-details-sidebar">
                    <h3>Buy Ticket</h3>
                    <div class="events-details-book">
                        <ul>
                            <li><a href="#">Totle Slots<span>30</span></a></li>
                            <li><a href="#">Booked Time<span>0</span></a></li>
                            <li><a href="#">Booked Slots<span>0</span></a></li>
                            <li><a href="#">Cost<span>Free</span></a></li>
                            <li><a href="#">Quantity<span>2</span></a></li>
                            <li><a href="#">Pay With</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>Paypal</a></li>
                                    <li><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>Visa</a></li>
                                    <li><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>Mastercard</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="book-button text-center">
                            <a class="button extra-small" href="#">
                                <span>Book Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End page content -->
@stop
