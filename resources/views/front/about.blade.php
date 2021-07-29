@extends('front.layouts.master')
@section('about_menu_active','current-menu-item')
@section('front_end_content')
    		<!-- Main content Start -->
            <div class="main-content">
                <!-- Breadcrumbs Start -->
                <div class="rs-breadcrumbs breadcrumbs-overlay">
                    <div class="breadcrumbs-img">
                        <img src="{{asset('assets/front/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
                    </div>
                    <div class="breadcrumbs-text white-color">
                        <h1 class="page-title">About Us</h1>
                        <ul>
                            <li>
                                <a class="active" href="index-2.html">Home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumbs End -->

                <!-- Counter Section Start -->
                <div id="rs-about" class="rs-about style3 pt-100 md-pt-70">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-4 lg-pr-0 md-mb-30">
                                <div class="about-intro">
                                    <div class="sec-title">
                                        <div class="sub-title orange">About Us</div>
                                        <h2 class="title mb-21">The End Result of All True Learning</h2>
                                        <div class="desc big">The key to success is to appreciate how people learn, understand the thought process that goes into instructional design, what works well, and a range of differen</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 pl-83 md-pl-15">
                                <div class="row rs-counter couter-area">
                                    <div class="col-md-4 sm-mb-30">
                                        <div class="counter-item one">
                                            <img class="count-img" src="{{asset('assets/front/images/about/style3/icons/1.png') }}" alt="">
                                            <h2 class="number rs-count kplus">2</h2>
                                            <h4 class="title mb-0">Students</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 sm-mb-30">
                                        <div class="counter-item two">
                                            <img class="count-img" src="{{asset('assets/front/images/about/style3/icons/2.png') }}" alt="">
                                            <h2 class="number rs-count">3.50</h2>
                                            <h4 class="title mb-0">Average CGPA</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-item three">
                                            <img class="count-img" src="{{asset('assets/front/images/about/style3/icons/3.png') }}" alt="">
                                            <h2 class="number rs-count percent">95</h2>
                                            <h4 class="title mb-0">Graduates</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter Section End -->

                <!-- About Section Start -->
                <div id="rs-about-video" class="rs-about-video pt-100 pb-100 md-pt-70 md-pb-70">
                    <div class="container">
                        <div class="video-img-part media-icon orange-color2">
                            <img src="{{asset('assets/front/images/about/about-video-bg-orange.png') }}" alt="Video Bg Image">
                            <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- About Section End -->
                <!-- Educavo History Start -->
                <div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
                                <div class="img-part">
                                    <img class="" src="{{asset('assets/front/images/about/history.png') }}" alt="About Image">
                                </div>
                                <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                                    <li class="nav-item tab-btns single-history">
                                        <a class="nav-link tab-btn active" id="about-history-tab" data-toggle="tab" href="#about-history" role="tab" aria-controls="about-history" aria-selected="true"><span class="icon-part"><i class="flaticon-banknote"></i></span>History</a>
                                    </li>
                                    <li class="nav-item tab-btns single-history">
                                        <a class="nav-link tab-btn" id="about-mission-tab" data-toggle="tab" href="#about-mission" role="tab" aria-controls="about-mission" aria-selected="false"><span class="icon-part"><i class="flaticon-flower"></i></span>Mission & Vission</a>
                                    </li>
                                    <li class="nav-item tab-btns single-history last-item">
                                        <a class="nav-link tab-btn" id="about-admin-tab" data-toggle="tab" href="#about-admin" role="tab" aria-controls="about-admin" aria-selected="false"><span class="icon-part"><i class="flaticon-analysis"></i></span>Administration</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="offset-lg-1"></div>
                            <div class="col-lg-5">
                                <div class="tab-content tabs-content" id="myTabContent">
                                    <div class="tab-pane tab fade show active" id="about-history" role="tabpanel" aria-labelledby="about-history-tab">
                                        <div class="sec-title mb-25">
                                            <h2 class="title">Educavo History</h2>
                                            <div class="desc">At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sim ilique sunt in culpa.</div>
                                        </div>
                                        <div class="tab-img">
                                            <img class="" src="{{asset('assets/front/images/about/tab1.jpg') }}" alt="Tab Image">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                                        <div class="sec-title mb-25">
                                            <h2 class="title">Educavo Mission</h2>
                                            <div class="desc">At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sim ilique sunt in culpa.</div>
                                        </div>
                                        <div class="tab-img">
                                            <img class="" src="{{asset('assets/front/images/about/tab2.jpg') }}" alt="Tab Image">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="about-admin" role="tabpanel" aria-labelledby="about-admin-tab">
                                        <div class="sec-title mb-25">
                                            <h2 class="title">Educavo Administration</h2>
                                            <div class="desc">At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sim ilique sunt in culpa.</div>
                                        </div>
                                        <div class="tab-img">
                                            <img class="" src="{{asset('assets/front/images/about/tab3.jpg') }}" alt="Tab Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Intro Info Tabs-->
                        <div class="intro-info-tabs">

                        </div>
                    </div>
                </div>
                <!-- Educavo History End -->
                <!-- Team Section Start -->
                <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg">
                    <div class="container">
                        <div class="sec-title mb-50 md-mb-30">
                                <div class="sub-title orange">Instructor</div>
                                <h2 class="title mb-0">Expert Teachers</h2>
                        </div>
                        <div class="rs-carousel owl-carousel nav-style2 orange-color" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                            <div class="team-item">
                                <img src="{{asset('assets/front/images/team/1.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Jhon Pedrocas</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-item">
                                <img src="{{asset('assets/front/images/team/2.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Jesika Albenian</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-item">
                                <img src="{{asset('assets/front/images/team/3.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Alex Anthony</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team Section End -->
            </div>
            <!-- Main content End -->
@endsection
