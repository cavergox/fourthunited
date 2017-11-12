@extends('layouts.master')

@section('content')
<!-- Start page content -->
<section class="top-courses pt-110 pb-80">
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="courses-area bg-2 bg-opacity bg-relative ptb-40 mb-60">
                    <div class="courses pr-100 pl-100">
                        <form class="ordering">
                            <div class="orderby-wrapper">
                                <select name="orderby" class="orderby">
                                    <option value="popularity" selected='selected'>Select Degree*</option>
                                    <option value="menu_order">GED</option>
                                    <option value="rating">Associate Degree</option>
                                    <option value="date">Bachelor's Degree</option>
                                    <option value="price">Master's Degree</option>
                                    <option value="price-desc">Doctorate/Prof Degree</option>
                                </select>
                            </div>
                            <div class="orderby-wrapper mrg-chosen">
                                <select name="orderby" class="orderby">
                                    <option value="popularity" selected='selected'>Ceategory*</option>
                                    <option value="menu_order">GED</option>
                                    <option value="rating">Associate Degree</option>
                                    <option value="date">Bachelor's Degree</option>
                                    <option value="price">Master's Degree</option>
                                    <option value="price-desc">Doctorate/Prof Degree</option>
                                </select>
                            </div>
                            <div class="orderby-wrapper">
                                <select name="orderby" class="orderby">
                                    <option value="popularity" selected='selected'>Subject*</option>
                                    <option value="menu_order">GED</option>
                                    <option value="rating">Associate Degree</option>
                                    <option value="date">Bachelor's Degree</option>
                                    <option value="price">Master's Degree</option>
                                    <option value="price-desc">Doctorate/Prof Degree</option>
                                </select>
                            </div>
                            <div class="chosen-submit">
                                <a class="button extra-small" href="#">
                                    <span>Search Courses</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/11.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details gray-bg">
                        <h3><a href="#">People Management</a></h3>
                       
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/11.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details gray-bg">
                        <h3><a href="#">Political Science</a></h3>
                       
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/11.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details gray-bg">
                        <h3><a href="#">Micro Biology</a></h3>
                        
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/11.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details gray-bg">
                        <h3><a href="#">Computer Science</a></h3>
                       
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/11.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details gray-bg">
                        <h3><a href="#">Open Learning</a></h3>
                        
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/11.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details gray-bg">
                        <h3><a href="#">Java Programming </a></h3>
                       
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/11.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details gray-bg">
                        <h3><a href="#">Financial Analyst</a></h3>
                        
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="blog-all mrg-xs">
                    <div class="blog-img">
                        <a href="#"><img src="{{ Theme::asset('img/blog/11.jpg') }}" alt="" ></a>
                    </div>
                    <div class="blog-details gray-bg">
                        <h3><a href="#">People Management</a></h3>
                       
                        <p>Lorem ipsum dolor sit amet, consect elit, sed do eiusmod </p>
                        <a class="button extra-small" href="#">
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center pt-30">
                <div class="pages2">
                    <ul>
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li class="active"><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End page content -->
@stop
