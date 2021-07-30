@extends('front.layouts.master')
@section('department_menu_active','current-menu-item')
@section('front_end_content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{asset('assets/front/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Departments</h1>
            <ul>
                <li>
                    <a class="active" href="index-2.html">Home</a>
                </li>
                <li>Departments</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="gridFilter text-center mb-50">
                <button class="active" data-filter="*">ALL</button>
                <button data-filter=".filter1">Physics</button>
                <button data-filter=".filter2">Chemistry</button>
                <button data-filter=".filter3">Biology</button>
                <button data-filter=".filter4">Computer</button>
            </div>
            <div class="row grid">
                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/1.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="{{url('/department-details')}}">Department of Computer Science and Engineering</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter4 filter1">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/2.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="{{url('/department-details')}}">Department of Petroleum Engineering</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/3.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="{{url('/department-details')}}">Department of civil Engineering</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter1 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/4.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="{{url('/department-details')}}">Department of Electric & Electronic Engineering</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter2 filter4">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/5.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="{{url('/department-details')}}">Department of Biomedical Engineering</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter1 filter3">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{asset('assets/front/images/courses/6.jpg') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="{{url('/department-details')}}">Department of Chemical Engineering</a></h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user"><i class="fa fa-user"></i> 245</li>
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
            <div class="pagination-area orange-color text-center mt-30 md-mt-0">
                <ul class="pagination-part">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->
</div>
<!-- Main content End -->
@endsection