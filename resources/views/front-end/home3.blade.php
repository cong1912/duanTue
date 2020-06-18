<<<<<<< HEAD
﻿@extends('front-end.layouts.master_home')
@section('content')
=======
﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template">
    <meta name="author" content="potenzaglobalsolutions.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>TRUNG TÂM DẠY NGHỀ LÁI XE SÀI GÒN</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('front-end\images\SaiGon.png')}}">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\bootstrap.min.css')}}">

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\flaticon.css')}}">

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\mega-menu\mega_menu.css')}}">

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\font-awesome.min.css')}}">

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\owl-carousel\owl.carousel.css')}}">

    <!-- jquery-ui -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\jquery-ui.css')}}">

    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\revolution\css\settings.css')}}">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\style.css')}}">

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\responsive.css')}}">

    <!-- Style customizer -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end\css\style-customizer.css')}}">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-557RCPW');</script>
    <!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<!--=================================
  loading -->

<div id="loading">
    <div id="loading-center">
        <img src="{{asset('front-end\images\loader.gif')}}" alt="">
    </div>
</div>

<!--=================================
  loading -->


<!--=================================
 header -->

<header id="header" class="topbar-dark">

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="index.html"><img src="{{asset('front-end/images/SaiGon.png')}}" alt="logo">
                                    </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li><a href="javascript:void(0)"> GIỚI THIỆU </a>
                                    <!-- drop down multilevel  -->

                                </li>
                                <li><a href="javascript:void(0)">KHÓA HỌC <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel">
                                        <li><a href="index.html">HẠNG B2</a></li>
                                        <li><a href="index-2.html">HẠNG C</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">TRA CỨU <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel">
                                        <li><a href="index.html">LỊCH THI TỐT NGHIỆP THÁNG 6</a></li>
                                        <li><a href="index-2.html">LỊCH THI SÁT HẠCH 06 – 2020</a></li>
                                        <li><a href="index.html">Lịch học lí thuyết tháng 6</a></li>
                                        <li><a href="index-2.html">LỊCH THI TỐT NGHIỆP 04 – 2020</a></li>
                                        <li><a href="index-2.html">LỊCH THI SÁT HẠCH </a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">PHẦN MỀM <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="listing-01.html">450 CÂU</a></li>
                                        <li><a href="listing-02.html">600 CÂU</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">TIN TỨC </a>
                                </li>
                                <li class=""><a href="javascript:void(0)"> TUYỂN DỤNG </a>
                                </li>
                                <li><a href="javascript:void(0)"> LIÊN HỆ</a>
                                </li>
                                <li>
                                    <div class="search-top"><a class="search-btn not_click d-none d-lg-block"
                                                               href="javascript:void(0);">Search Button</a>
                                        <div class="search-box not-click">
                                            <div class="row">
                                                <div>
                                                    <div class="selected-box">
                                                        <input type="text" class="form-control ml-3"
                                                               style="width: 930px" placeholder="Nhập từ khóa...">
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="text-center">
                                                        <button class="button red ml-4" type="button">Tìm kiếm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!--=================================
 header -->

>>>>>>> 7578438161549e459e20e9f8d1247c9a8c34d777

<!--=================================
 rev-slider -->

<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="car-dealer-05"
     data-source="gallery"
     style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
    <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
        <ul>  <!-- SLIDE  -->
            <li data-index="rs-3" data-transition="random-static,random-premium,random"
                data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"
                data-randomtransition="on" data-easein="default,default,default,default"
                data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"
                data-thumb="revolution/assets/100x50_3ecde-01.jpg" data-rotate="0,0,0,0" data-saveperformance="off"
                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{asset('front-end/revolution/assets/3ecde-01.jpg')}}" alt="" data-bgposition="center center"
                     data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="62" data-y="179"
                     data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                     data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                     data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                     style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-transform:uppercase;">
                    TRUNG TÂM DẠY NGHỀ <br>LÁI XE SÀI GÒN
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption   tp-resizeme" id="slide-3-layer-2" data-x="62" data-y="348" data-width="['657']"
                     data-height="['auto']" data-type="text" data-responsive_offset="on"
                     data-frames='[{"delay":1720,"speed":1070,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                     data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                     style="z-index: 6; min-width: 657px; max-width: 657px; white-space: normal; font-size: 14px; line-height: 24px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                    Là một trong những trung tâm đào tạo lái xe hạng B2 và C uy tín, chuyên nghiệp hàng đầu tại Việt Nam
                    với đội ngũ giáo viên giảng dạy giàu kinh nghiệm, chuyên nghiệp tận tâm
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption button red " id="slide-3-layer-4" data-x="62" data-y="452" data-width="['auto']"
                     data-height="['auto']" data-type="button" data-responsive_offset="on"
                     data-frames='[{"delay":1720,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]'
                     data-textalign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                     data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]"
                     data-paddingleft="[30,30,30,30]"
                     style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 16px; font-weight: 400; font-family:Open Sans;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                    LIÊN HỆ NGAY
                </div>

                <div class="container">
                    <div class="d-flex float-right h-100">
                        <div class="card">
                            <div class="card-header align-content-center">
                                <h3 class="mt-1 ml-2">Liên hệ chúng tôi</h3>
                                @include('alerts.success')
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('contact.store') }}" autocomplete="off">
                                    @csrf
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" name="name" class="form-control" placeholder="Tên của bạn">

                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="email" name="email" class="form-control"
                                               placeholder="Email của bạn">
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" name="phone" class="form-control" placeholder="SDT của bạn">
                                    </div>
                                    <div class="container">
                                        <p style="color: white; font-size: 15px">Khóa học:</p>
                                        <div class="form-check-inline">
                                            <label class="form-check-label"   for="radio1" style="color: white">
                                                <input type="radio" class="form-check-input" id="radio1" name="driver’s_license"
                                                       value="hạng B2" checked>Hạng B2
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label"  for="radio2" style="color: white">
                                                <input type="radio" class="form-check-input" id="radio2" name="driver’s_license"
                                                       value="Hạng C">Hạng C
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-footer ml-5">
                                        <div class="form-group">
                                            <input type="submit" value="Đăng ký ngay"
                                                   class="btn login_btn align-content-center">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-4" data-transition="random-static,random-premium,random"
                data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"
                data-randomtransition="on" data-easein="default,default,default,default"
                data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"
                data-thumb="revolution/assets/100x50_ac5dd-02.jpg" data-rotate="0,0,0,0" data-saveperformance="off"
                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{asset('front-end/revolution/assets/ac5dd-02.jpg')}}" alt="" data-bgposition="center center"
                     data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
                <!-- LAYERS -->

                <!-- LAYER NR. 4 -->
                <div class="tp-caption   tp-resizeme" id="slide-4-layer-1" data-x="62" data-y="179"
                     data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                     data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                     data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                     style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-transform:uppercase;">
                    Học lái xe hạng B2, C<br>
                    chỉ với 1.000.000 Đ
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption   tp-resizeme" id="slide-4-layer-2" data-x="62" data-y="348" data-width="['657']"
                     data-height="['auto']" data-type="text" data-responsive_offset="on"
                     data-frames='[{"delay":1720,"speed":1070,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                     data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                     style="z-index: 6; min-width: 657px; max-width: 657px; white-space: normal; font-size: 14px; line-height: 24px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                    Tận tâm vì sự an toàn! Giáo viên 1 kèm 1, thủ tục đơn giản, giờ học tự chọn, hỗ trợ thi lại trong
                    ngày. hoàn tiền 200% nếu phát sinh phí. Học nhanh - Thi sớm - Có bằng ngay.
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption button red " id="slide-4-layer-4" data-x="62" data-y="430" data-width="['auto']"
                     data-height="['auto']" data-type="button" data-responsive_offset="on"
                     data-frames='[{"delay":1720,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]'
                     data-textalign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                     data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]"
                     data-paddingleft="[30,30,30,30]"
                     style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 16px; font-weight: 400;font-family:Open Sans;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                    ĐĂNG KÝ NGAY
                </div>

                <div class="container">
                    <div class="d-flex float-right h-100">
                        <div class="card">
                            <div class="card-header align-content-center">
                                <h3 class="mt-1 ml-2">Liên hệ chúng tôi</h3>

                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Tên của bạn">

                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email của bạn">
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="phone" class="form-control" placeholder="SDT của bạn">
                                    </div>
                                    <div class="container">
                                        <form>
                                            <p style="color: white; font-size: 15px">Khóa học:</p>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="radio1" style="color: white">
                                                    <input type="radio" class="form-check-input" id="radio1"
                                                           name="optradio" value="option1" checked>Hạng B2
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="radio2" style="color: white">
                                                    <input type="radio" class="form-check-input" id="radio2"
                                                           name="optradio" value="option2">Hạng C
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer ml-5">
                                <div class="form-group">
                                    <input type="submit" value="Đăng ký ngay"
                                           class="btn login_btn align-content-center">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>

<!--=================================
 rev-slider -->


<!--=================================
 welcome -->

<section class="welcome-3 white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="content-box-2 car-bg-1">
                    <i class="glyph-icon flaticon-beetle"></i>
                    <a class="title" href="#">Cấp bằng lái xe cho học viên</a>
                    <p>Sau khi thi đỗ kỳ thi sát hạch 7 ngày là bạn có thể nhận bằng về và tham gia giao thông rồi
                        đó!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-box-2 car-bg-2">
                    <i class="glyph-icon flaticon-price-tag"></i>
                    <a class="title" href="#">Học thực hành lái xe ô tô</a>
                    <p>Học một thầy một trò một xe, giáo viên nhiệt tình, hướng dẫn chi tiết đầy đủ các mục và mẹo trong
                        bài sa hình.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-box-2 car-bg-3">
                    <i class="glyph-icon flaticon-reparation"></i>
                    <a class="title" href="#">Đăng ký học lái xe ô tô</a>
                    <p>Các bước đăng ký rất đơn giản chỉ cần học viên mang theo duy nhất CMND việc còn lại trung tâm sẽ
                        làm giúp bạn.</p>
                </div>
            </div>
        </div>
        <div class="row about custom-block-2">
            <div class="col-md-6 candeu">
                <h2> VỀ CHÚNG TÔI </h2>
                <p>Là một trong những công ty tiên phong về lĩnh vực dạy lái xe ô tô và xe tải hàng đầu tại Việt Nam.
                    Với sự phát triển không ngừng của ngành lái xe, lợi ích và sự phát triển của khách hàng luôn là vấn
                    đề ưu tiên hàng đầu của công ty chúng tôi. Vì vậy đến với 3T, khách hàng sẽ được hỗ trợ tối đa học
                    lái xe B2, C, D, E… và sự dụng các dịch vụ cũng như thiết bị lái xe tiên tiến do 3T cung cấp cho cho
                    học học viên sử dụng.
                    Để làm được điều này một cách tốt nhất, kết hợp với các trung tâm đào tạo và dạy nghề cùng hệ thống
                    3T, công ty đã phát hành mô hình chuỗi trung tâm học lái xe phù hợp các vị trí địa lý có nhu cầu học
                    học lái xe cao.</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid center-block" src="{{asset('front-end\images\car\11.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="feature-box-2 box-hover active">
                    <div class="icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="content">
                        <h5>Nhiệt Tình – Tận Tâm</h5>
                        <p>Đội ngũ giáo viên đông đảo, giàu kinh nghiệm, nhiệt tình đào tạo bài bản.</p><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box-2 box-hover">
                    <div class="icon">
                        <i class="glyph-icon flaticon-interface-1"></i>
                    </div>
                    <div class="content">
                        <h5 class="mt-2">Linh Động – Hiệu Quả</h5>
                        <p>Học viên tự chọn lịch học, được giáo viên dạy 1 kèm 1 đảm bảo hiệu quả cao mỗi buổi học.</p>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box-2 box-hover">
                    <div class="icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="content">
                        <h5>Chuyên Nghiệp – Hiện Đại</h5>
                        <p>Chúng tôi luôn đi đầu về đầu tư trang thiết bị, xe hơi đời mới nhất cho các Quý học viên được
                            trải nghiệm tốt nhất.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box-2 box-hover">
                    <div class="icon">
                        <i class="glyph-icon flaticon-wallet"></i>
                    </div>
                    <div class="content">
                        <h5>Cam Kết Trọn Gói Không Phát Sinh</h5>
                        <p>Cam kết mọi quyền lợi cũng như quy trình đào tạo rõ ràng cho học viên.</p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 welcome -->

<!--=================================
 hotline -->

<section class="welcome-block objects-car page-section-ptb white-bg">
    <div class="objects-left left"><img class="img-fluid objects-1" src="{{asset('front-end\images\objects\01.jpg')}}"
                                        alt=""></div>
    <div class="objects-right right"><img class="img-fluid objects-2" src="{{asset('front-end\images\objects\02.jpg')}}"
                                          alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="halp-call text-center">
                    <img class="img-fluid" src="{{asset('front-end\images\team\01.jpg')}}" alt="">
                    <span>Hotline:</span>
                    <h2 class="text-red"> 0899.545.466</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 end of hotline -->

<!--=================================
 feature-car -->

<section class="feature-car gray-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>
                        KHÓA HỌC LÁI XE Ô TÔ
                    </h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6">
                <div class="content-box-2 car-bg-4 text-center">
                    <i class="glyph-icon flaticon-beetle"></i>
                    <h3 class="title  text-center" href="#">KHÓA HỌC BẰNG B2</h3>
                    <h5 class=" text-center">8.500.000đ</h5>
                    <p class="mt-3">Học phí trọn gói 100%</p>
                    <p>Hỗ trợ trả góp lãi suất 0%</p>
                    <p>Lịch học linh động (T2 - CN)</p>
                    <a class="button" href="#">ĐĂNG KÝ NGAY</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-box-2 car-bg-5 text-center">
                    <i class="glyph-icon flaticon-price-tag"></i>
                    <h3 class="title " href="#">KHÓA HỌC BẰNG C</h3>
                    <h5 class="text-center">11.000.000đ</h5>
                    <p class="mt-3">Học phí trọn gói 100%</p>
                    <p>Hỗ trợ trả góp lãi suất 0%</p>
                    <p>Lịch học linh động (T2 - CN)</p>
                    <a class="button" href="#">ĐĂNG KÝ NGAY</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 feature-car -->


<!--=================================
 our-service -->

<section class="our-service white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>LÝ DO HƠN 20.000 NGƯỜI ĐĂNG KÝ HỌC LÁI HỌC LÁI 3T SÀI GÒN</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box-2">
                            <div class="icon">
                                <i class="glyph-icon flaticon-wallet"></i>
                            </div>
                            <div class="content">
                                <h5>ĐĂNG KÝ ĐƯỢC HỌC LIỀN</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2">
                            <div class="icon">
                                <i class="glyph-icon flaticon-gas-station"></i>
                            </div>
                            <div class="content">
                                <h5>GIẢI PHÁP HỌC LÁI XE TRẢ GÓP 0%</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box-2">
                            <div class="icon">
                                <i class="glyph-icon flaticon-air-conditioning"></i>
                            </div>
                            <div class="content">
                                <h5>TIẾP TỤC ĐƯỢC GIẢM HỌC PHÍ ĐẾN 0 ĐỒNG KHI GIỚI THIỆU THÊM HỌC VIÊN</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2">
                            <div class="icon">
                                <i class="glyph-icon flaticon-gearstick"></i>
                            </div>
                            <div class="content">
                                <h5>THỜI GIAN HỌC THỰC HÀNH BẢO LƯU HOẶC CHUYỂN NHƯỢNG CHO NGƯỜI KHÁC</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2">
                            <div class="icon">
                                <i class="glyph-icon flaticon-circle"></i>
                            </div>
                            <div class="content">
                                <h5>LỰA CHỌN GIÁO VIÊN THỰC HÀNH THEO YÊU CẦU</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2">
                            <div class="icon">
                                <i class="glyph-icon flaticon-price-tag"></i>
                            </div>
                            <div class="content">
                                <h5>GIẢM GIÁ KHI CHẤP NHẬN HỌC MUỘN HOẶC ĐÓNG HỌC PHÍ 1 LẦN</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="{{asset('front-end\images\car\_DSC8572.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<!--=================================
 our-service -->


<hr class="gray">

<!--=================================
 latest news -->

<section class="latest-blog gray-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>TIN TỨC MỚI</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-md-12">
                <div class="owl-carousel" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1"
                     data-space="20">
                    <div class="item">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-fluid"
                                     src="{{asset('front-end\images\blog\bao-hiem-xe-may-1-800x385.jpg')}}" alt="">
                                <div class="date">
                                    <span>may 28</span>
                                </div>
                            </div>
                            <div class="blog-content">

                                <div class="blog-description text-center">
                                    <a href="#">4 điều bạn cần phải biết về bảo hiểm xe máy</a>
                                    <div class="separator"></div>
                                    <p> – Theo quy định tại thông tư 22/2016 của Bộ Tài chính thì: “Chủ xe cơ giới khi
                                        tham gia giao thông trên lãnh thổ Việt Nam phải tham gia bảo hiểm bắt buộc
                                        [...]</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{asset('front-end\images\blog\Toyata-yaris-768x512.png')}}"
                                     alt="">
                                <div class="date">
                                    <span>apr 13</span>
                                </div>
                            </div>
                            <div class="blog-content">

                                <div class="blog-description text-center">
                                    <a href="#">Top 05 Mẫu Xe Ô tô Tiết Kiệm Xăng Nhất Hiện Nay</a>
                                    <div class="separator"></div>
                                    <p>Bài viết hôm nay 3T Sài Gòn xin chia sẻ các bạn 05 mẫu xe tiết kiệm xăng nhất
                                        hiện nay và đang được phân phối tại thị trường Việt Nam [...]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{asset('front-end\images\blog\hinhc-1400x466.png')}}"
                                     alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">

                                <div class="blog-description text-center">
                                    <a href="#">600 câu hỏi thi sát hạch lái xe</a>
                                    <div class="separator"></div>
                                    <p>Trung Tâm Dạy Nghề Lái Xe Sài Gòn xin giới thiệu phần mềm 600 câu hỏi lý thuyết
                                        lái xe B2 và học bằng C mới nhất 2020 từ Tổng Cục Đường Bộ Việt Nam trong năm
                                        2019 đã tiến hành đổi mới [...]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{asset('front-end\images\blog\1-1-800x400.png')}}" alt="">
                                <div class="date">
                                    <span>apr 13</span>
                                </div>
                            </div>
                            <div class="blog-content">

                                <div class="blog-description text-center">
                                    <a href="#">Ma Trận Lừa Đảo Của Các Trung Tâm Dạy Lái Xe B2 & bằng C</a>
                                    <div class="separator"></div>
                                    <p>1. 100% bao đậu
                                        “Ảo banh nóc” là cách quảng cáo gây sốc và cũng là chiêu trò dụ học viên đăng ký
                                        học lái xe B2 và bằng C của một số trường dạy lái xe không uy tín [...]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<!--=================================
 latest news -->


<!--=================================
 testimonial -->

<section class="testimonial-3 white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>CẢM NHẬN CỦA HỌC VIÊN VỀ 3T SÀI GÒN</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="1" data-md-items="1"
                     data-sm-items="1" data-xs-items="1" data-space="30">
                    <div class="item">
                        <div class="testimonial-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="testimonial-avtar">
                                        <img class="img-fluid center-block"
                                             src="{{asset('front-end\images\home\2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <div class="testimonial-content">
                                        <p><i class="fa fa-quote-left"></i> <span>Thực hành lái xe b2 mình hay bị lỗi chạy lên dốc cầu. Nhưng khi được các thầy tại 3T Sai Gon hướng dẫn tận tâm mình đã khắc phục lỗi này trong ngày.</span>
                                            <i class="fa fa-quote-right float-right"></i></p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h6>PHAN THANH HIẾU</h6>
                                        <span>KHÁCH HÀNG 3T SÀI GÒN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="testimonial-avtar">
                                        <img class="img-fluid center-block"
                                             src="{{asset('front-end\images\home\3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <div class="testimonial-content">
                                        <p><i class="fa fa-quote-left"></i> <span>Sân tập tại Saigon3t được thiết kế theo tiêu chuẩn của Bộ GTVT và chuẩn Singapore nên rất dễ dàng đánh lái khi áp dụng lý thuyết được học .vào thực hành.</span>
                                            <i class="fa fa-quote-right float-right"></i></p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h6>PHẠM ĐĂNG TƯỜNG</h6>
                                        <span>KHÁCH HÀNG 3T SÀI GÒN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="testimonial-avtar">
                                        <img class="img-fluid center-block"
                                             src="{{asset('front-end\images\home\4.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <div class="testimonial-content">
                                        <p><i class="fa fa-quote-left"></i> <span>Khi học lái xe tại trung tâm Saigon3t mình cảm thấy rất thoải mái vì có thể sắp xếp thời gian và chọn lịch học phù hợp với công việc mình đang làm. </span>
                                            <i class="fa fa-quote-right float-right"></i></p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h6>VŨ TRỌNG TUYỂN
                                        </h6>
                                        <span>KHÁCH HÀNG 3T SÀI GÒN
              </span>
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

<!--=================================
 testimonial -->


<!--=================================
 Newsletter -->

<section class="news-letter-main bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-red">Liên hệ với chúng tôi</h4>
                <p class="text-white">Để nhận thêm thông tin chi tiết. </p>
            </div>
            <div class="col-md-6">
                <form class="news-letter-form">
                    <div class="row no-gutter">
                        <div class="col-md-10 col-9"><input type="email" placeholder="Email của bạn"
                                                            class="form-control placeholder"></div>
                        <div class="col-md-2 col-3"><a class="button red" href="#">Gửi</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<<<<<<< HEAD
 <!--=================================
 Newsletter -->
@endsection
=======
<!--=================================
Newsletter -->


<!--=================================
 footer -->

<footer class="footer-3 footer-topbar light page-section-pt">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="about-content">
                    <h6 class="text-danger">VỀ CHÚNG TÔI</h6>
                    <p class="candeu">Có hệ thống cơ sở nhiều nhất việt nam (5 cơ sở) có quy mô đào tạo lớn nhất việt
                        nam là một trong những đơn vị duy nhất có s n tập công nghệ singapore kiểm soát giờ tập bằng
                        công nghệ v n tay giám sát trực tuyến việc dạy, học qua camera và GPS.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="usefull-link candeu">
                    <h6 class="text-danger">TIN TỨC MỚI NHẤT</h6>
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>4 Điều Bạn Cần Phải Biết Về Bảo Hiểm Xe
                                Máy</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Top 05 Mẫu Xe Ô tô Tiết Kiệm Xăng Nhất
                                Hiện Nay</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> 600 câu hỏi thi sát hạch lái xe</a>
                        </li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Ma Trận Lừa Đảo Của Các Trung Tâm Dạy
                                Lái Xe B2 & bằng C</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="recent-post-block candeu">
                    <h6 class="text-danger mb-3">TỪ KHÓA </h6>
                    <a href="#" style="font-size: 22pt; color: black"> 3t sài gòn</a>
                    <a href="#" style="font-size: 9pt; color: black">bảo hiểm xe máy</a>
                    <a href="#" style="font-size: 9pt; color: black">bằng B2</a>
                    <a href="#" style="font-size: 13pt; color: black">bằng c</a>
                    <a href="#" style="font-size: 13pt; color: black">giấy phép lái xe B2</a>
                    <a href="#" style="font-size: 9pt; color: black">hoc lai xe bien hoa</a>
                    <a href="#" style="font-size: 9pt; color: black">hoclaixeotobienhoa.com</a>
                    <a href="#" style="font-size: 9pt; color: black"> học bằng C </a>
                    <a href="#" style="font-size: 9pt; color: black">học lái xe b2 </a>
                    <a href="#" style="font-size: 9pt; color: black">học lái xe bằng b2</a>
                    <a href="#" style="font-size: 9pt; color: black">học lái xe ô tô</a>
                    <a href="#" style="font-size: 13pt; color: black">học lái xe ô tô biên hòa</a>
                    <a href="#" style="font-size: 9pt; color: black">học phí bằng b2</a>
                    <a href="#" style="font-size: 9pt; color: black">học phí lái xe B2</a>
                    <a href="#" style="font-size: 22pt; color: black">lái xe B2</a>
                    <a href="#" style="font-size: 9pt; color: black">lý thuyết học lái xe B2</a>
                    <a href="#" style="font-size: 9pt; color: black">Sài Gòn 3T</a>
                    <a href="#" style="font-size: 9pt; color: black">thi bằng lái b2</a>
                    <a href="#" style="font-size: 9pt; color: black"> thi lái xe B2</a>
                    <a href="#" style="font-size: 9pt; color: black">thi lý thuyết hạng B2</a>
                    <a href="#" style="font-size: 9pt; color: black">thi sát hạch B2</a>
                    <a href="#" style="font-size: 9pt; color: black">thi thực hành b2</a>
                    <a href="#" style="font-size: 9pt; color: black"> đào tạo lái xe hạng B2</a>
                    <a href="#" style="font-size: 9pt; color: black">đăng ký học lái xe B2</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="news-letter">
                    <h6 class="text-danger mb-3">THÔNG TIN 3T SÀI GÒN </h6>
                    <p>Địa Chỉ: 205C Phạm Văn Thuận, Phường Tân Tiến, Biên Hòa, Đồng Nai.</p>
                    <p class="mt-3">Hotline: 0899.545.466</p>
                    <p> Email: hoclaitoanquoc@gmail.com</p>
                    <form class="news-letter">
                        <input type="email" placeholder="Email của bạn" class="form-control placeholder">
                        <a class="button red mt-4" href="#">Gửi</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="text-lg-left text-center">
                        <p>Phát triển 2020 © <span class="text-dark">Học lái toàn quốc </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=================================
footer -->


<!--=================================
back to top -->

<div class="car-top">
    <span><img src="{{asset('front-end\images\car.png')}}" alt=""></span>
</div>

<!--=================================
back to top -->


<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="{{asset('front-end\js\jquery-3.3.1.min.js')}}"></script>

<!-- bootstrap -->
<script type="text/javascript" src="{{asset('front-end\js\popper.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end\js\bootstrap.min.js')}}"></script>

<!-- mega-menu -->
<script type="text/javascript" src="{{asset('front-end\js\mega-menu\mega_menu.js')}}"></script>

<!-- appear -->
<script type="text/javascript" src="{{asset('front-end\js\jquery.appear.js')}}"></script>

<!-- counter -->
<script type="text/javascript" src="{{asset('front-end\js\counter\jquery.countTo.js')}}"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="{{asset('front-end\js\owl-carousel\owl.carousel.min.js')}}"></script>

<!-- jquery-ui -->
<script type="text/javascript" src="{{asset('front-end\js\jquery-ui.js')}}"></script>

<!-- select -->
<script type="text/javascript" src="j{{asset('front-end\s\select\jquery-select.js')}}"></script>

<!-- magnific popup -->
<script type="text/javascript" src="{{asset('front-end\js\magnific-popup\jquery.magnific-popup.min.js')}}"></script>

<!-- revolution -->
<script type="text/javascript" src="{{asset('front-end\revolution\js\jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end\revolution\js\jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('front-end\revolution\js\extensions\revolution.extension.video.min.js')}}"></script>

<!-- custom -->
<script type="text/javascript" src="{{asset('front-end\js\custom.js')}}"></script>

<!-- style customizer  -->
<script type="text/javascript" src="{{asset('front-end\js\style-customizer.js')}}"></script>

<script type="text/javascript">
    (function ($) {
        "use strict";

        var tpj = jQuery;
        var revapi3;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_3_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_3_1");
            } else {
                revapi3 = tpj("#rev_slider_3_1").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1270,
                    gridheight: 700,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    })(jQuery);

</script>

</body>
</html>
>>>>>>> 7578438161549e459e20e9f8d1247c9a8c34d777
