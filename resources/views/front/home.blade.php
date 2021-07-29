@extends('front.layouts.master')
@section('index_menu_active','current-menu-item')
@section('front_end_content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Banner Section Start -->
    <div id="rs-banner" class="rs-banner style1">
        <div class="container">
            <div class="banner-content text-center">
                <h1 class="banner-title capitalize wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Education during COVID-19 moving towards e-learning</h1>
                <div class="desc mb-35 wow wow fadeInRight" data-wow-delay="900ms" data-wow-duration="3000ms">Every act of conscious learning requires the willingness to <br>suffer an injury to one’s self-esteem during COVID-19.</div>
                <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                    <a class="readon banner-style" href="#">Get Started Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-last">
                    <div class="notice-bord style1">
                        <h4 class="title">Notice Board</h4>
                        <ul>
                            @foreach ($notices as $notice)
                            <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <!-- <div class="date"><span>20</span>June</div> -->
                                <div class="date">{{$notice->created_at}}</div>
                                <div class="desc">{{$notice->title}}/div>
                            </li>
                            @endforeach
                            <a class="d-block btn-part text-right sm-text-left" href="javascript:void(0)">
                                <h4 class="readon">view all notices</h4>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 pr-50 md-pr-15">
                    <div class="about-part">
                        <div class="sec-title mb-40">
                            <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">About Us</div>
                            <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">World Best Virtual Learning Network Educavo eLearning</h2>
                            <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod tempor incidi dunt ut labore et dolore magna aliqua. Ut enims ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod tempor incidi dunt ut labore et dolore magna aliqua. Ut enims ad minim veniam.Lorem sum dolor sit amet, consectetur adipisicing.</div>
                        </div>
                        <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                            <div class="img-part">
                                <img src="{{asset('assets/front/images/about/ceo.png') }}" alt="CEO Image">
                            </div>
                            <div class="author-part">
                                <span class="sign mb-10"><img src="{{asset('assets/front/images/about/sign.png') }}" alt="Sign"></span>
                                <span class="post">CEO & Founder of Educavo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <section class="content-row">
        <div class="content-box-01 padding-top-100 padding-sm-top-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="servises-item serv-item-01">
                            <h3 class="servises-item__title">Cloud Library</h3>
                            <div class="servises-item__text">
                                <p>Morbi eget maximus diam, vel rutrum orci. Curabitur dictum augue sit amet laoreet dignissim. Etiam feugiat nisl est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="servises-item serv-item-02">
                            <h3 class="servises-item__title">Certifications</h3>
                            <div class="servises-item__text">
                                <p>Nunc ut elit tempus, faucibus orci vel, consequat odio. Praesent consectetur dignissim ullamcorper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="servises-item serv-item-03">
                            <h3 class="servises-item__title">Video Lessons</h3>
                            <div class="servises-item__text">
                                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec vitae orci ac elit dapibus tincidunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="servises-item serv-item-04">
                            <h3 class="servises-item__title">Train Your Brain</h3>
                            <div class="servises-item__text">
                                <p>Morbi eget maximus diam, vel rutrum orci. Curabitur dictum augue sit amet laoreet dignissim. Etiam feugiat nisl est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="servises-item serv-item-05">
                            <h3 class="servises-item__title">Master the Skils</h3>
                            <div class="servises-item__text">
                                <p>Nunc ut elit tempus, faucibus orci vel, consequat odio. Praesent consectetur dignissim ullamcorper. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="servises-item serv-item-06">
                            <h3 class="servises-item__title">Graduate the Best</h3>
                            <div class="servises-item__text">
                                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec vitae orci ac elit dapibus tincidunt. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section Start -->
    <div id="rs-categories" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40">
        <div class="container">
            <div class="row y-middle mb-50 md-mb-30">
                <div class="col-md-6 sm-mb-30">
                    <div class="sec-title">
                        <div class="sub-title primary">Subject Categories</div>
                        <h2 class="title mb-0">Our Top Categories </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-part text-right sm-text-left">
                        <a href="#" class="readon">View All Categories</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/1.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Genarel Education</h4>
                            <span class="courses">05 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/2.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Computer Science</h4>
                            <span class="courses">05 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/3.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Civil Engineering</h4>
                            <span class="courses">05 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/4.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Artificial Intelligence</h4>
                            <span class="courses">05 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/5.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Business Studies</h4>
                            <span class="courses">05 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/6.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Web Development</h4>
                            <span class="courses">05 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/7.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Life Course</h4>
                            <span class="courses">8 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/8.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Lawyer Course</h4>
                            <span class="courses">1 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{asset('assets/front/images/categories/icons/9.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">Recipes</h4>
                            <span class="courses">7 Courses</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
        <div class="container">
            <div class="row y-middle mb-50 md-mb-30">
                <div class="col-md-6 sm-mb-30">
                    <div class="sec-title">
                        <div class="sub-title primary">Top Courses</div>
                        <h2 class="title mb-0">Popular Courses</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-part text-right sm-text-left">
                        <a href="#" class="readon">View All Courses</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/1.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <ul class="meta-part">
                                <li><span class="price">$55.00</span></li>
                                <li><a class="categorie" href="#">Web Development</a></li>
                            </ul>
                            <h3 class="title"><a href="course-single.html">Become a PHP Master and Make Money Fast</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            (05)
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/2.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <ul class="meta-part">
                                <li><span class="price">$55.00</span></li>
                                <li><a class="categorie" href="#">Web Development</a></li>
                            </ul>
                            <h3 class="title"><a href="course-single.html">Learning jQuery Mobile for Beginners</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            (05)
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/3.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <ul class="meta-part">
                                <li><span class="price">$55.00</span></li>
                                <li><a class="categorie" href="#">Photography</a></li>
                            </ul>
                            <h3 class="title"><a href="course-single.html">The Art of Black and White Photography</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            (05)
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/4.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <ul class="meta-part">
                                <li><span class="price">$55.00</span></li>
                                <li><a class="categorie" href="#">Web Development</a></li>
                            </ul>
                            <h3 class="title"><a href="course-single.html">Learn Python – Interactive Python Tutorial</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            (05)
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/5.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <ul class="meta-part">
                                <li><span class="price">$55.00</span></li>
                                <li><a class="categorie" href="#">Photography</a></li>
                            </ul>
                            <h3 class="title"><a href="course-single.html">Your Complete Guide to Dark Photography</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            (05)
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/6.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <ul class="meta-part">
                                <li><span class="price">$55.00</span></li>
                                <li><a class="categorie" href="#">Web Development</a></li>
                            </ul>
                            <h3 class="title"><a href="course-single.html">From Zero to Hero with Advance Nodejs</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                        <li class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            (05)
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->

    <!-- CTA Section Start -->
    <div class="rs-cta section-wrap gray-bg">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="img-part">
                    <img src="{{asset('assets/front/images/cta/home1.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <div class="content">
                    <div class="sec-title mb-40 ">
                        <h2 class="title">Admission Open for 2020</h2>
                        <div class="desc">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail in their duty through weakness. These cases are perfectly simple and easy every pleasure is to be welcomed and every pain avoided.</div>
                    </div>
                    <div class="btn-part">
                        <a class="readon banner-style uppercase" href="#">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Faq Section Start -->
    <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 padding-0">
                    <div class="main-part">
                        <div class="title mb-40 md-mb-15">
                            <h2 class="text-part">Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-content">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne">What are the requirements ?</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">

                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Does Educavo offer free courses?</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">

                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">What is the transfer application process?</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">

                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">What is distance education?</a>
                                    </div>
                                    <div id="collapsefour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 padding-0">
                    <div class="img-part media-icon">
                        <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- faq Section Start -->

    <!-- Team Section Start -->
    <div id="rs-team" class="rs-team style1 gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
            <div class="sec-title mb-50 md-mb-30">
                <div class="sub-title primary">Instructor</div>
                <h2 class="title mb-0">Expert Teachers</h2>
            </div>
            <div class="rs-carousel owl-carousel nav-style2" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
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

    <!-- Section bg Wrap 2 start -->
    <div class="bg2">
        <!-- Blog Section Start -->
        <div id="rs-blog" class="rs-blog style1 pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container">
                <div class="sec-title mb-60 md-mb-30 text-center">
                    <div class="sub-title primary">News Update </div>
                    <h2 class="title mb-0">Latest News & Events</h2>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-12 pr-75 md-pr-15 md-mb-50">
                        <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="col-md-6">
                                <div class="image-part">
                                    <a href="#"><img src="{{asset('assets/front/images/blog/1.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                    </ul>
                                    <h3 class="title"><a href="#">University while the lovely valley team work </a></h3>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <div class="col-md-6">
                                <div class="image-part">
                                    <a href="#"><img src="{{asset('assets/front/images/blog/2.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                    </ul>
                                    <h3 class="title"><a href="#">While The Lovely Valley Team Work</a></h3>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center no-gutter white-bg blog-item wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <div class="col-md-6">
                                <div class="image-part">
                                    <a href="#"><img src="{{asset('assets/front/images/blog/3.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                    </ul>
                                    <h3 class="title"><a href="#">Modern School The Lovely Valley Team Work</a></h3>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 lg-pl-0">
                        <div class="events-short mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="date-part">
                                <span class="month">June</span>
                                <div class="date">20</div>
                            </div>
                            <div class="content-part">
                                <div class="categorie">
                                    <a href="#">Math</a> & <a href="#">English</a>
                                </div>
                                <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                            </div>
                        </div>
                        <div class="events-short mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <div class="date-part">
                                <span class="month">June</span>
                                <div class="date">21</div>
                            </div>
                            <div class="content-part">
                                <div class="categorie">
                                    <a href="#">Math</a> & <a href="#">English</a>
                                </div>
                                <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                            </div>
                        </div>
                        <div class="events-short mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <div class="date-part">
                                <span class="month">June</span>
                                <div class="date">22</div>
                            </div>
                            <div class="content-part">
                                <div class="categorie">
                                    <a href="#">Math</a> & <a href="#">English</a>
                                </div>
                                <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                            </div>
                        </div>
                        <div class="events-short wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                            <div class="date-part">
                                <span class="month">June</span>
                                <div class="date">23</div>
                            </div>
                            <div class="content-part">
                                <div class="categorie">
                                    <a href="#">Math</a> & <a href="#">English</a>
                                </div>
                                <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

    </div>
    <!-- Section bg Wrap 2 End -->
</div>
<!-- Main content End -->
@endsection