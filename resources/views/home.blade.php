@extends('layouts.frontend')

@section('content')

    <!-- hero start -->
    <section class="hero hero__style-one bg_img" data-background="/assets/img/bg/hero_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="hero__content">
                        <h1 class="wow skewIn">Study abroad, <br> <span>made easy</span></h1>
                        <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".6s">Empowering Nigerian students to achieve their dreams of studying abroad by providing comprehensive guidance, resources, and support throughout their entire application journey.</p>
                        <ul class="xb-list list-unstyled mt-40 mb-60 wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration=".6s">
                            Services offered includes:
                            <li><i class="far fa-check"></i>Study Abroad counselling</li>
                            <li><i class="far fa-check"></i>Admission placement </li>
                            <li><i class="far fa-check"></i>Class Enrolment</li>
                            <li><i class="far fa-check"></i>Logistics and Accommodation assistance</li>
                            <li><i class="far fa-check"></i>Test preparation such as IELTS, TOEFL, SAT, GRE Coaching </li>
                        </ul>
                        <div class="btns wow fadeInUp" data-wow-delay="600ms" data-wow-duration=".6s">
                            <a class="thm-btn" href="/contact">VIEW SCHOOLS</a>
                            <a class="thm-btn thm-btn--white" href="/about">Read Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <!-- brand start -->
    <section class="brand pt-110 pb-90">
        <div class="container">
            <h2 class="brand-title text-center mb-50">
                <span><span> Choose your preferred school in any part of the world</span></span>
            </h2>
            <div class="xb-swiper-sliders brand-slider">
                <div class="xb-carousel-inner">
                    <div class="xb-swiper-container swiper-container">
                        <div class="xb-swiper-wrapper swiper-wrapper">
                            <div class="swiper-slide xb-swiper-slide">
                                <a href="#!"><img src="/assets/img/brand/Coventry-University-logo-150x50.jpg" alt=""></a>
                            </div>
                            <div class="swiper-slide xb-swiper-slide">
                                <a href="#!"><img src="/assets/img/brand/Florida-Atlantic-University.jpg" alt=""></a>
                            </div>
                            <div class="swiper-slide xb-swiper-slide">
                                <a href="#!"><img src="/assets/img/brand/illinois-state-university-logo.jpg" alt=""></a>
                            </div>
                            <div class="swiper-slide xb-swiper-slide">
                                <a href="#!"><img src="/assets/img/brand/illinois-state-university-logo.jpg" alt=""></a>
                            </div>
                            <div class="swiper-slide xb-swiper-slide">
                                <a href="#!"><img src="/assets/img/brand/Nottingham-Trent-University-logo.png" alt=""></a>
                            </div>
                            <div class="swiper-slide xb-swiper-slide">
                                <a href="#!"><img src="/assets/img/brand/RAU-logo-150x50.jpg" alt=""></a>
                            </div>
                            <div class="swiper-slide xb-swiper-slide">
                                <a href="#!"><img src="/assets/img/brand/Roehampton_logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand end -->

    <!-- visa type start -->
    <section class="visa type pb-135">
        <div class="container">
            <div class="service-wrap pos-rel">
                <div class="service-img-wrap">
                    <div class="service-bg" data-background="/assets/img/bg/service_bg.png"></div>
                    <div class="service-img wow skewIn" data-wow-delay="100ms"
                         data-background="/assets/img/service/img_01.jpg"></div>
                </div>
                <div class="sec-title wow skewIn pt-120">
                    <h2 class="mb-60">Study abroad,  <br> <span>in 4 easy steps</span></h2>
                </div>
                <div class="row justify-content-md-center mt-none-30">
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="xb-service">
                            <div class="xb-item--inner">
                                <div class="xb-item--icon color2 mb-50">
                                    <img src="/assets/img/icon/sv_02.svg" alt="">
                                </div>

                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title mb-20"><a href="visa-single.html">Apply</a>
                                    </h3>
                                    <div class="xb-item--description">See a school you like? Apply online, by email, phone call or in person at any of our offices accross Nigeria...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="xb-service">
                            <div class="xb-item--inner">
                                <div class="xb-item--icon color4 mb-50">
                                    <img src="/assets/img/icon/sv_04.svg" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title mb-20"><a href="visa-single.html">Provide documents</a></h3>
                                    <div class="xb-item--description">Forward all necessary academic and personal documents by email to <a href="mailto:admissions@modeducation.info" tabindex="0">admissions@modeducation.info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-30"></div>
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="xb-service">
                            <div class="xb-item--inner">
                                <div class="xb-item--icon mb-50">
                                    <img src="/assets/img/icon/sv_01.svg" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title mb-20"><a href="visa-single.html">Visa</a> application
                                    </h3>
                                    <div class="xb-item--description">
                                        After securing admission, we’ll guide you during the visa application process. We have a 98% visa success rate.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="xb-service">
                            <div class="xb-item--inner">
                                <div class="xb-item--icon color3 mb-50">
                                    <img src="/assets/img/icon/sv_03.svg" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title mb-20"><a href="visa-single.html">Enroll</a></h3>
                                    <div class="xb-item--description">
                                        We will support you with logistics such as airport pick up, accommodation et al to ensure you arrive safely at school.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- visa type end -->

    <!-- country start -->
    <section class="country pt-120 pb-130">
        <div class="container">
            <div class="row mb-30 align-items-center">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <h2 class="mb-20 wow skewIn">Approved partner institutions <br> <span>Institutions where you can use the study loan</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="sec-title mb-20">
                        <p>Choosing the ideal destination for immigration is a pivotal decision that can shape the trajectory of your </p>
                    </div>
                </div>
            </div>
            <ul class="xb-country-nav nav nav-tabs ul_li_between mb-65" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="xbc-tab1" data-bs-toggle="tab"
                            data-bs-target="#xbc-tab-pane1" type="button" role="tab" aria-controls="xbc-tab-pane1"
                            aria-selected="true">Europe
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="xbc-tab2" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane2"
                            type="button" role="tab" aria-controls="xbc-tab-pane2" aria-selected="false">North
                        America
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="xbc-tab3" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane3"
                            type="button" role="tab" aria-controls="xbc-tab-pane3" aria-selected="false">Asia
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="xbc-tab4" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane4"
                            type="button" role="tab" aria-controls="xbc-tab-pane4" aria-selected="false">Latin
                        America
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="xbc-tab5" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane5"
                            type="button" role="tab" aria-controls="xbc-tab-pane5" aria-selected="false">Oceania
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="xbc-tab6" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane6"
                            type="button" role="tab" aria-controls="xbc-tab-pane6" aria-selected="false">Africa
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="xbc-tab7" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane7"
                            type="button" role="tab" aria-controls="xbc-tab-pane7" aria-selected="false">Antarctica
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane animated fadeInUp show active" id="xbc-tab-pane1" role="tabpanel"
                     aria-labelledby="xbc-tab1" tabindex="0">
                    <div class="xb-country ul_li">
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_01.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Canada</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_02.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Belgium</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_03.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Denmark</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_04.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Australia</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_05.png" alt="">
                                </div>
                                <h3 class="xb-item--title">France</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_06.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Germany</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_07.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Greece</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_08.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Hungary</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_09.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Iceland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_10.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Ireland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_11.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Italy</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_12.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Luxembourg</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="xbc-tab-pane2" role="tabpanel"
                     aria-labelledby="xbc-tab2" tabindex="0">
                    <div class="xb-country ul_li">
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_02.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Belgium</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_03.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Denmark</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_09.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Iceland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_04.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Australia</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_05.png" alt="">
                                </div>
                                <h3 class="xb-item--title">France</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_01.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Canada</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_06.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Germany</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_08.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Hungary</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_12.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Luxembourg</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_10.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Ireland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_07.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Greece</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_11.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Italy</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="xbc-tab-pane3" role="tabpanel"
                     aria-labelledby="xbc-tab3" tabindex="0">
                    <div class="xb-country ul_li">
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_02.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Belgium</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_06.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Germany</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_03.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Denmark</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_05.png" alt="">
                                </div>
                                <h3 class="xb-item--title">France</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_07.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Greece</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_11.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Italy</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_08.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Hungary</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_01.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Canada</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_10.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Ireland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_04.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Australia</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_12.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Luxembourg</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_09.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Iceland</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="xbc-tab-pane4" role="tabpanel"
                     aria-labelledby="xbc-tab4" tabindex="0">
                    <div class="xb-country ul_li">
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_06.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Germany</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_04.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Australia</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_05.png" alt="">
                                </div>
                                <h3 class="xb-item--title">France</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_07.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Greece</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_12.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Luxembourg</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_09.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Iceland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_01.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Canada</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_02.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Belgium</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_03.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Denmark</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_10.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Ireland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_08.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Hungary</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_11.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Italy</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="xbc-tab-pane5" role="tabpanel"
                     aria-labelledby="xbc-tab5" tabindex="0">
                    <div class="xb-country ul_li">
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_06.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Germany</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_07.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Greece</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_11.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Italy</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_09.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Iceland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_10.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Ireland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_12.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Luxembourg</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_01.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Canada</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_08.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Hungary</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_02.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Belgium</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_03.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Denmark</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_04.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Australia</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_05.png" alt="">
                                </div>
                                <h3 class="xb-item--title">France</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="xbc-tab-pane6" role="tabpanel"
                     aria-labelledby="xbc-tab6" tabindex="0">
                    <div class="xb-country ul_li">
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_08.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Hungary</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_10.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Ireland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_11.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Italy</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_12.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Luxembourg</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_01.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Canada</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_09.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Iceland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_02.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Belgium</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_03.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Denmark</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_04.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Australia</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_07.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Greece</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_05.png" alt="">
                                </div>
                                <h3 class="xb-item--title">France</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_06.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Germany</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="xbc-tab-pane7" role="tabpanel"
                     aria-labelledby="xbc-tab7" tabindex="0">
                    <div class="xb-country ul_li">
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_06.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Germany</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_07.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Greece</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_08.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Hungary</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_09.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Iceland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_01.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Canada</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_11.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Italy</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_12.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Luxembourg</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_02.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Belgium</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_10.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Ireland</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_03.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Denmark</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_05.png" alt="">
                                </div>
                                <h3 class="xb-item--title">France</h3>
                            </a>
                        </div>
                        <div class="xb-item--item">
                            <a href="country-single.html" class="xb-item--inner ul_li">
                                <div class="xb-item--flag">
                                    <img src="/assets/img/country/img_04.png" alt="">
                                </div>
                                <h3 class="xb-item--title">Australia</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- country end -->

    <!-- testimonial start -->
    <section class="testimonial bg_img pt-130 pb-130" data-bg-color="#EDF3F5" data-background="/assets/img/bg/tm_bg.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="sec-title margin-none-md mb-30-xs mb-125">
                        <h2 class="mb-70 wow skewIn">Happy Clients Reflect on Their <br>
                            <span> Journey with Us</span></h2>
                        <p>Embark on a Global Exploration: <br> Experience Joy in 190+ Countries <br> and Across the
                            World</p>
                    </div>
                    <div class="xb-testimonial__nav ul_li">
                        <div class="tm-nav-item tm-button-prev"></div>
                        <div class="tm-nav-item tm-button-next"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="xb-swiper-sliders">
                        <div class="xb-carousel-inner">
                            <div class="xb-testimonial-slider xb-swiper-container swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide xb-swiper-slide">
                                        <div class="xb-testimonial">
                                            <div class="xb-item--inner text-center">
                                                <div class="xb-item--img">
                                                    <img class="images" decoding="async" src="/assets/img/testimonial/Adebayo.jpg" alt="Adebayo Charles" title="Study in Canada, the US, UK, &amp; more 1">
                                                </div>
                                                <div class="xb-item--content">
                                                    MOD helped in my progress into the University of Hertfordshire, UK. They were there to ensure my admission, IFP and visa support.​
                                                </div>
                                                <div class="xb-item--bottom">
                                                    <div class="xb-item--ratting">
                                                        <img src="/assets/img/icon/tr_rattig.png" alt="">
                                                    </div>
                                                    <h3 class="xb-item--title">Goladria Gomez</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide xb-swiper-slide">
                                        <div class="xb-testimonial">
                                            <div class="xb-item--inner text-center">
                                                <div class="xb-item--img">
                                                    <div class="elementor-testimonial__footer">
                                                        <div class="elementor-testimonial__image">
                                                            <img decoding="async" class="images" src="/assets/img/testimonial/Aliyu.jpg" alt="Bassey Peter" title="Study in Canada, the US, UK, &amp; more 2">
                                                        </div>
                                                        <cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name"></span><span class="elementor-testimonial__title">Studying in the Canada</span></cite> </div>
                                                </div>
                                                <div class="xb-item--content">
                                                    My postgraduate programme was a success courtesy of MOD Education. I could always call my dedicated counsellor.
                                                </div>
                                                <div class="xb-item--bottom">
                                                    <div class="xb-item--ratting">
                                                        <img src="/assets/img/icon/tr_rattig.png" alt="">
                                                    </div>
                                                    <h3 class="xb-item--title">Aliyu Kola</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide xb-swiper-slide">
                                        <div class="xb-testimonial">
                                            <div class="xb-item--inner text-center">
                                                <div class="xb-item--img">
                                                    <div class="elementor-testimonial__footer">
                                                        <div class="elementor-testimonial__image">
                                                            <img decoding="async" class="images" src="/assets/img/testimonial/bassey.jpg" alt="Bassey Peter" title="Study in Canada, the US, UK, &amp; more 2">
                                                        </div>
                                                        <cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name"></span><span class="elementor-testimonial__title">Studying in the US</span></cite> </div>
                                                </div>
                                                <div class="xb-item--content">

                                                    I am glad my masters is now a reality. Despite the fact that my visa was application was late, MOD processed my papers successfully​.
                                                </div>
                                                <div class="xb-item--bottom">
                                                    <div class="xb-item--ratting">
                                                        <img src="/assets/img/icon/tr_rattig.png" alt="">
                                                    </div>
                                                    <h3 class="xb-item--title">Bassey Peter</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->

    <!-- team start -->
    <section class="team pt-120 pb-130 bg_img" data-background="/assets/img/bg/team_bg.jpg">
        <div class="container">
            <div class="sec-title text-center mb-65">
                <h2 class="mb-40 wow skewIn">Our trusted immigration <br> <span> support team</span></h2>
                <p>At the heart of our commitment to providing exceptional <br> immigration solutions stands</p>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner" data-parallax='{"scale" : 1}'>
                            <a href="team-single.html">
                                <div class="xb-item--img">
                                    <img src="/assets/img/team/img_01.png" alt="">
                                </div></a>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name">Mr. Happy Anidi</h3>
                                <span class="xb-item--designation">Chief Responsibility Officer/ Regional Director for North America, Europe and Australia.</span>
                            </div>

                            <ul class="xb-item--social list-unstyled">
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <a href="team-single.html">
                                <div class="xb-item--img">
                                    <img src="/assets/img/team/img_02.png" alt="">
                                </div>
                            </a>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name">Mr Edmund Iyawe</h3>
                                <span class="xb-item--designation">Chief Education Officer/ Regional Director for Africa and Asia</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <img src="/assets/img/team/img_03.png" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="team-single.html">Andrew Riis</a></h3>
                                <span class="xb-item--designation">Visa Specialist</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <img src="/assets/img/team/img_04.png" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="team-single.html">Kristin Watson</a></h3>
                                <span class="xb-item--designation">Visa Coordinator</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <img src="/assets/img/team/img_05.png" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="team-single.html">Jerome Bell</a></h3>
                                <span class="xb-item--designation">General Manager</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <img src="/assets/img/team/img_06.png" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="team-single.html">Eleanor Pena</a></h3>
                                <span class="xb-item--designation">Case Manager</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <img src="/assets/img/team/img_07.png" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="team-single.html">Steve Trister</a></h3>
                                <span class="xb-item--designation">Visa Coordinator</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <img src="/assets/img/team/img_08.png" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="team-single.html">Daniel Lewis</a></h3>
                                <span class="xb-item--designation">Case Manager</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team end -->

    <!-- contact start -->
    <section class="contact contact-pt gray-bg">
        <div class="container">
            <div class="xb-contact pos-rel">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="xb-item--inner">
                            <div class="xb-item--holder mb-25">
                                <span><img src="/assets/img/icon/n_pad.svg" alt="">Contact Us</span>
                                <h3>Do you have questions or went more <br> information?</h3>
                            </div>
                            <form class="xb-item--form contact-from" action="#!">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="/assets/img/icon/c_user.svg" alt=""></span>
                                            <input type="text" placeholder="Goladria Gomez">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="/assets/img/icon/c_mail.svg" alt=""></span>
                                            <input type="text" placeholder="e.visa@services.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="/assets/img/icon/c_select.svg" alt=""></span>
                                            <select name="select" id="nice-select">
                                                <option value="1">Student Visa</option>
                                                <option value="2">Tourist Visa</option>
                                                <option value="3">Commercial Visa</option>
                                                <option value="4">Residence Visa</option>
                                                <option value="4">Working Visa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="/assets/img/icon/c_call.svg" alt=""></span>
                                            <input type="text" placeholder="+888 -8867 3333">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="xb-item--field">
                                            <span><img src="/assets/img/icon/c_message.svg" alt=""></span>
                                            <textarea name="message" id="message" cols="30" rows="10"
                                                      placeholder="Write Your Message..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="thm-btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.254272231177!2d90.3654215!3d23.7985508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1592852423971!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

@endsection
