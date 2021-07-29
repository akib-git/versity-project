<!--Full width header Start-->
<div class="full-width-header header-style1 home1-modifiy">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-2">
                      <div class="logo-cat-wrap">
                          <div class="logo-part">
                              <a href="{{url('/')}}">
                                  <img src="{{asset('assets/front/images/logo-dark.png') }}" alt="">
                              </a>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-7 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                              <div class="mobile-menu">
                                  <a class="rs-menu-toggle">
                                      <i class="fa fa-bars"></i>
                                  </a>
                              </div>
                              <nav class="rs-menu">
                                 <ul class="nav-menu">
                                    <li class="@yield('index_menu_active')"> <a href="{{url('/')}}">Home</a>
                                    </li>
                                     <li class="@yield('about_menu_active')">
                                         <a href="{{url('/about')}}">About</a>
                                     </li>

                                     <li  class="@yield('course_menu_active')">
                                         <a href="{{url('/courses')}}">Courses</a>
                                     </li>

                                     {{-- <li class="menu-item-has-children ">
                                         <a href="#">Pages</a>
                                         <ul class="sub-menu">
                                             <li>
                                                 <a href="team.html">Team</a>
                                             </li>
                                             <li>
                                                 <a href="events-style1.html">Event</a>
                                             </li>
                                             <li class="menu-item-has-children">
                                                 <a href="#">Others</a>
                                                 <ul class="sub-menu right">
                                                     <li><a href="faq.html">FAQ</a></li>
                                                     <li><a href="error.html">404 Page</a></li>
                                                     <li><a href="login.html">Login</a></li>
                                                     <li><a href="register.html">Register</a></li>
                                                 </ul>
                                             </li>
                                         </ul>
                                     </li> --}}

                                     <li class="@yield('blog_menu_active')">
                                         <a href="{{url('/blog')}}">Blog</a>
                                             {{-- <li>
                                                 <a href="blog-single.html">Single Post</a>
                                             </li> --}}
                                     </li>

                                     <li class="@yield('contact_menu_active')">
                                         <a href="{{url('/contact')}}">Contact</a>
                                     </li>


                                 </ul> <!-- //.nav-menu -->
                              </nav>
                            </div> <!-- //.main-menu -->

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="expand-btn-inner mr-0">
                            <ul class="text-right">
                                <li class="mr-3">
                                    <a class="hidden-xs rs-search">
                                        <i class="flaticon-search"> </i>
                                    </a>
                                </li>

                                <li class="">
                                        <a id="login" class="uppercase  @yield('login_active')">
                                                        Login
                                        </a>
                                </li>
                                <li class="text-right ">
                                        <a href="{{url("/register")}}" class="uppercase @yield('register_active')">
                                                        Register
                                        </a>
                                </li>
                            </ul>
                        </div>


                        <div>

                        </div>
                    </div>
                </div>
                <ul class="search_box">
                    <li>
                        <form action="">
                            <input type="text" placeholder="Seach here....">
                            <button type="submit"><i class="flaticon-search"> </i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn">
                <div id="nav-close">
                    <div class="line">
                        <span class="line1"></span><span class="line2"></span>
                    </div>
                </div>
            </div>

            <div class="rs-login">
                <div class="container">
                    <div class="noticed p-0">
                        <div class="main-part">
                            <div class="method-account">
                                <h2 class="login">Login</h2>
                                <form>
                                    <input type="email" name="E-mail" placeholder="E-mail" required="">
                                    <input type="text" name="text" placeholder="Password" required="">
                                    <button type="submit" class="readon submit-btn">login</button>
                                    <div class="last-password">
                                        <p>Not registered? <a href="{{url('/register')}}">Create an account</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-contact">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </nav>
        <!-- Canvas Menu end -->


    </header>
    <!--Header End-->
</div>
<!--Full width header End-->
