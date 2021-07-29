@extends('front.layouts.master')
@section('contact_menu_active','current-menu-item')
@section('front_end_content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{asset('assets/front/images/breadcrumbs/5.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color padding">
            <h1 class="page-title white-color">Contact Us</h1>
            <ul>
                <li>
                    <a class="active" href="index-2.html">Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row mb-90 md-mb-50">
                <div class="col-lg-4 col-md-12 md-mb-30">
                    <div class="rs-contact-wrap">
                        <div class="inner-part text-center">
                            <h2 class="title2">General</h2>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Email Addresss</span>
                                 <span class="des">info@educavo.com</span>
                             </div>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Phone Number</span>
                                 <span class="des"><a href="tel%2b0885898745.html">(+088)589-8745</a></span>
                             </div>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="fa fa-map-signs"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Address</span>
                                 <span class="des">New Jesrsy, 1201, USA</span>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 md-mb-30">
                    <div class="rs-contact-wrap">
                        <div class="inner-part text-center">
                            <h2 class="title2">Admissions</h2>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Email Address</span>
                                 <span class="des">admission@educavo.com</span>
                             </div>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Phone Number 1</span>
                                 <span class="des"><a href="tel%2b0885898745.html">(+088)589-8745</a></span>
                             </div>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Phone Number 2</span>
                                 <span class="des"><a href="tel%2b0885898102.html">(+088)589-102</a></span>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="rs-contact-wrap">
                        <div class="inner-part text-center">
                            <h2 class="title2">Emergency</h2>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                               <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Email Address</span>
                                 <span class="des">emergency@educavo.com</span>
                             </div>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Phone Number 1</span>
                                 <span class="des"><a href="tel%2b0885898745.html">(+088)589-8745</a></span>
                             </div>
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="address-text">
                                 <span class="label">Phone Number 2</span>
                                 <span class="des"><a href="tel%2b0885898102.html">(+088)589-102</a></span>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-30">
                    <!-- Map Section Start -->
                    <div class="contact-map3">
                        <iframe src="https://maps.google.com/maps?q=Fort%20Miley&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="contact-comment-box">
                        <div class="inner-part">
                            <h2 class="title mb-mb-15">Get In Touch</h2>
                            <p>Have some suggestions or just want to say hi? Our  support team are ready to help you 24/7.</p>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/educavo/mailer.php">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="col-lg-12 mb-50">
                                        <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="btn-send" type="submit" value="Submit Now">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

</div>
<!-- Main content End -->
@endsection
