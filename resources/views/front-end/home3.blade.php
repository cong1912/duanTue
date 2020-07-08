@extends('front-end.layouts.master_home')
@section('content')

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
                         <a href="{{route('lienhe')}}" class="text-light">LIÊN HỆ NGAY</a>
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

                                        <div class="input-group form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   placeholder="Email của bạn">
                                            @include('alerts.feedback', ['field' => 'email'])


                                        </div>
                                        <div class="input-group form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="phone" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="SDT của bạn">
                                            @include('alerts.feedback', ['field' => 'phone'])
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
                                    @error('email') {{$message}}@enderror
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
                     <a href="{{route('lienhe')}}" class="text-light">ĐĂNG KÝ NGAY</a>
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
                                        <div class="input-group form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   placeholder="Email của bạn">
                                            @include('alerts.feedback', ['field' => 'email'])
                                        </div>
                                        <div class="input-group form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="phone" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="SDT của bạn">
                                            @include('alerts.feedback', ['field' => 'phone'])
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
                <div class="col-md-6">
                    <h2>VỀ CHÚNG TÔI </h2>
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
                        <img class="img-fluid" src="{{asset('front-end\images\logo.jpg')}}" alt="">
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
                <div class="col-md-4">
                    <div class="content-box-2 car-bg-4 text-center">
                        <i class="glyph-icon flaticon-beetle"></i>
                        <h3 class="title  text-center" href="#">KHÓA HỌC BẰNG B2</h3>
                        <h5 class=" text-center">7.800.000đ</h5>
                        <p class="mt-3">Học phí trọn gói 100%</p>
                        <p>Hỗ trợ trả góp lãi suất 0%</p>
                        <p>Lịch học linh động (T2 - CN)</p>
                        <a class="button" href="{{route('lienhe')}}">ĐĂNG KÝ NGAY</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box-2 car-bg-5 text-center">
                        <i class="glyph-icon flaticon-price-tag"></i>
                        <h3 class="title " href="#">KHÓA HỌC BẰNG C</h3>
                        <h5 class="text-center">9.300.000đ</h5>
                        <p class="mt-3">Học phí trọn gói 100%</p>
                        <p>Hỗ trợ trả góp lãi suất 0%</p>
                        <p>Lịch học linh động (T2 - CN)</p>
                        <a class="button" href="{{route('lienhe')}}">ĐĂNG KÝ NGAY</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box-2 car-bg-4 text-center">
                        <i class="glyph-icon flaticon-reparation"></i>
                        <h3 class="title " href="#">HỌC LÁI XE CHỈ VỚI </h3>
                        <h5 class="text-center">1.000.000đ</h5>
                        <p class="mt-3">Giáo viên 1 kèm 1</p>
                        <p>Thủ tục đơn giản</p>
                        <p>Giờ học tự chọn</p>
                        <a class="button" href="{{route('lienhe')}}">ĐĂNG KÝ NGAY</a>
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
                         @foreach($new as $new)
                        <div class="item" style="height: 500px">

                            <div class="blog-2" >

                                <div class="blog-image" >
                                    <img style="height: 178px; width: 356px;" src="{{ asset('storage/'.$new->image) }}">
                                    <div class="date">
                                        <span>may 28</span>
                                    </div>
                                </div>
                                <div class="blog-content">

                                    <div class="blog-description text-center">
                                    <a href="{{route('chitiet-tintuc',$new->slug)}}">{!!$new->title!!}</a>
                                        <div class="separator"></div>
                                        <p> {!!$new->tomtat!!}</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        @endforeach
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

    <!--=================================
    Newsletter -->
@endsection
