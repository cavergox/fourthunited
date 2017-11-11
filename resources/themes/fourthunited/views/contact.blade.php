@extends('layouts.master')

@section('content')
<!-- Start page content -->
<section class="contact-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-area-all">
                    <div id="hastech2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="conract-area-bottom pt-110">
                    <h3 class="main-contact">Get In Touch</h3>
                    <form id="contact-form" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-input">
                                    <input name="name" placeholder="Name*" type="text">
                                    <i class="icofont icofont-hotel-boy"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-input mrg-eml">
                                    <input name="email" placeholder="Email*" type="email">
                                    <i class="icofont icofont-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                               <div class="main-input mt-20 mb-20">
                                    <input name="subject" placeholder="Subject*" type="text">
                                    <i class="icofont icofont-pencil"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-leave2">
                                    <textarea name="message" placeholder="Type Your Massage......."></textarea>
                                    <button class="submit" type="submit">Send Massage</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="communication-all pt-110">
                    <h3 class="main-contact">Address</h3>
                    <div class="single-communication mb-20">
                        <div class="communication-icon">
                            <i class="icofont icofont-social-google-map"></i>
                        </div>
                        <div class="communication-text">
                            <p>112 meril avenue, Ocland City </p>
                            <p>New York</p>
                        </div>
                    </div>
                    <div class="single-communication mb-20">
                        <div class="communication-icon">
                            <i class="icofont icofont-ui-call"></i>
                        </div>
                        <div class="communication-text">
                            <p>(+123) 45 67 89 21</p>
                            <p>(+123) 45 67 89 21</p>
                        </div>
                    </div>
                    <div class="single-communication">
                        <div class="communication-icon">
                            <i class="icofont icofont-envelope"></i>
                        </div>
                        <div class="communication-text">
                            <p>
                                <a href="#">devitmes@gmail.com</a>
                                <a href="#">www.devitmes@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End page content -->
@stop
