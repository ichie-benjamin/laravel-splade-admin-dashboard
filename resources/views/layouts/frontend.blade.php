<!doctype html>
<html lang="zxx">
<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ settings('site_name') }} - {{ settings('site_slogan') }}</title>

    <link rel="shortcut icon" href="/assets/img/favicon.png" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/odometer.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

<!-- backtotop - start -->
<div class="xb-backtotop">
    <a href="#" class="scroll">
        <i class="far fa-arrow-up"></i>
    </a>
</div>
<!-- backtotop - end -->

<!-- preloader start -->
<div id="xb-loadding">
    <div class="loader">
        <div class="plane">
            <img class="plane-img" src="/assets/img/icon/plane.gif" alt="">
        </div>
        <div class="earth-wrapper">
            <div class="earth"></div>
        </div>
    </div>
</div>
<!-- preloader end -->

<div class="body_wrap">

    <!-- header start -->
    <header class="site-header header-style-one">
        <div class="header__top-wrap gray-bg">
            <div class="container">
                <div class="header__top ul_li_between">
                    <div class="header__top-cta">
                        <img src="/assets/img/icon/n_pad.svg" alt=""><span>Help Desk :</span> {{ settings('phone') }}
                    </div>
                    <ul class="header__top-info ul_li">
                        <li><img src="/assets/img/icon/time.svg" alt="">Monday - Friday 09:00 am - 05:00 Pm</li>
                        <li><img src="/assets/img/icon/location.svg" alt="">{{ settings('address') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__wrap stricky">
            <div class="container">
                <div class="header__inner ul_li_between">
                    <div class="header__logo">
                        <a href="index.html"><img src="/assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                        <nav class="main-menu collapse navbar-collapse">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="/"><span>Home</span></a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#!"><span>About us</span></a>
                                    <ul class="submenu">
                                        <li><a href="/about"><span>About us</span></a></li>
                                        <li><a href="/faqs"><span>FaQs</span></a></li>
                                        <li><a href="/testimonials"><span>Testimonials</span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#!"><span>Services</span></a>
                                    <ul class="submenu">
                                        <li><a href="/services"><span>Services</span></a></li>
                                        <li><a href="/service-single.html"><span>Services details</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="/blog"><span>Blog</span></a></li>

                                <li><a href="/contact"><span>Contact</span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="xb-hamburger-menu">
                        <div class="xb-nav-mobile">
                            <div class="xb-nav-mobile-button"><i class="fal fa-bars"></i></div>
                        </div>
                    </div>
                    <ul class="header__action ul_li">
                        <li>
                            <a class="header__search header-search-btn" href="javascript:void(0);">
                                <img src="/assets/img/icon/search.svg" alt="">Search
                            </a>
                        </li>
                        <li>
                            <div class="header__language">
                                <ul>
                                    <li><a href="#!" class="lang-btn">
                                            <div class="flag"><img src="/assets/img/icon/us_flag.png" alt=""></div>
                                            English
                                            <div class="arrow_down"><img src="/assets/img/icon/arrow_down.svg" alt=""></div>
                                        </a>
                                        <ul class="lang_sub_list">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Arabic</a></li>
                                            <li><a href="#">Bangla</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="xb-header-wrap">
            <div class="xb-header-menu">
                <div class="xb-header-menu-scroll">
                    <div class="xb-menu-close xb-hide-xl xb-close"></div>
                    <div class="xb-logo-mobile xb-hide-xl">
                        <a href="index.html" rel="home"><img src="/assets/img/logo/logo.svg" alt=""></a></div>
                    <div class="xb-header-mobile-search xb-hide-xl">
                        <form role="search" action="#">
                            <input type="text" placeholder="Search..." name="s" class="search-field">
                            <button type="submit" class="search-submit">
                            </button>
                        </form>
                    </div>
                    <nav class="xb-header-nav">
                        <ul class="xb-menu-primary clearfix">
                            <li class="menu-item ">
                                <a href="#"><span>Home</span></a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#"><span>About us</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="about.html"><span>About us</span></a></li>
                                    <li class="menu-item"><a href="faq.html"><span>FaQs</span></a></li>
                                    <li  class="menu-item"><a href="testimonial.html"><span>testimonials</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#"><span>Services</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="services.html"><span>Services</span></a></li>
                                    <li class="menu-item"><a href="service-single.html"><span>Service details</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="blog.html"><span>Blog</span></a></li>
                            <li class="menu-item"><a href="contact.html"><span>Contact</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="xb-header-menu-backdrop"></div>
        </div>
    </header>
    <!-- header end -->

    <!-- header search start -->
    <div class="header-search-form-wrapper">
        <div class="xb-search-close xb-close"></div>
        <div class="header-search-container">
            <form role="search" class="search-form" action="#">
                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
            </form>
        </div>
    </div>


    <div class="body-overlay"></div>
    <main>
        @yield('content')
    </main>

    <!-- footer start -->
    <footer class="site-footer gray-bg pt-65">
        <div class="container">
            <div class="row mt-none-30 pb-60">
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Do you have questions or went more information? Contact us now</h3>
                        <ul class="footer__cta list-unstyled mt-50">
                            <li class="ul_li"><span><img src="/assets/img/icon/f_call.svg" alt=""></span>+91590 088 55
                            </li>
                            <li class="ul_li"><span><img src="/assets/img/icon/f_mail.svg" alt=""></span>e.visa@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Explore Link</h3>
                        <ul class="footer__links list-unstyled">
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>About Us</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Blog</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Testimonials</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Terms & Conditions</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Services</h3>
                        <ul class="footer__links list-unstyled">
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Tourist Visa</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Commercial Visa</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Student Visa</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Residence Visa</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Working Visa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Our branches</h3>
                        <ul class="footer__links list-unstyled">
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Canada</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Coimbatore</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Tirunelveli</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Germany</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Chennai</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copyright ul_li_between">
                <div class="footer__copyright-text mt-15">
                    Copyright © {{ date('Y') }} {{ settings('site_name') }} All rights reserved.
                </div>
                <div class="footer__copyright-img mt-20">
                    <img src="/assets/img/icon/card_img.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- footer start -->

</div>

<!-- jquery include -->
<script src="/assets/js/jquery-3.7.1.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/swiper.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/odometer.min.js"></script>
<script src="/assets/js/jquery.nice-select.min.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/parallax-scroll.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>
