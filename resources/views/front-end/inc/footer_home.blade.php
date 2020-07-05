

<!--=================================
 footer -->

 <footer class="footer-3 footer-topbar light page-section-pt">
    <div class="container">
       <div class="row top">
    <div class="col-lg-3 col-md-12">
      <img class="img-fluid" src="{{asset('front-end/images/SaiGon.png')}}" alt="">
    </div>
    <div class="col-lg-5 col-md-12">
      <div class="footer-nav text-lg-right text-center">
        <ul>
        <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
          <li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
          <li><a href="{{route('tintuc')}}">Tin tức</a></li>
          <li><a href="{{route('tuyendung')}}">Tuyển dụng</a></li>
          <li><a href="{{route('lienhe')}}">Liên hệ</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 col-md-12">
      <div class="social text-lg-right text-center">
          <ul>
            <li><a href="https://www.facebook.com/trungtam3tsaigondongnai/"> <i class="fa fa-facebook"></i> </a></li>

          </ul>
       </div>
    </div>
   </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="about-content">
            <h6 class="text-danger">VỀ CHÚNG TÔI</h6>
            <p>Có hệ thống cơ sở nhiều nhất việt nam (5 cơ sở) có quy mô đào tạo lớn nhất việt nam là một trong những đơn vị duy nhất có s n tập công nghệ singapore kiểm soát giờ tập bằng công nghệ v n tay giám sát trực tuyến việc dạy, học qua camera và GPS.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="usefull-link ">
          <h6 class="text-danger">TIN TỨC MỚI NHẤT</h6>
            <ul>
              @foreach ($tintuc as $tintuc)
              <li><a href="{{route('chitiet-tintuc',$tintuc->slug)}}"><i class="fa fa-angle-double-right"></i>{{$tintuc->title}}</a></li>
              @endforeach    </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
         <div class="recent-post-block">
          <h6 class="text-danger mb-3">TỪ KHÓA </h6>
          <div class="tags">
            <ul>
             @foreach ($key as $key)
             <a class="btn btn-outline-danger mb-3" style="font-style: normal; font-size: 13px" href="/timkiem?key={!!$key->bancong!!}">{!!$key->keyword!!}</a>
             @endforeach
           </ul>
          </div>
      </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="news-letter">
            <h6 class="text-danger mb-3">THÔNG TIN 3T SÀI GÒN </h6>
            <div class="address">
              <ul>
                <li> <i class="fa fa-map-marker"></i><span>205C Phạm Văn Thuận, Phường Tân Tiến, Biên Hòa, Đồng Nai.</span> </li>
                <li> <i class="fa fa-phone"></i><span>0899.545.466</span> </li>
                <li> <i class="fa fa-envelope-o"></i><span>hoclaitoanquoc@gmail.com</span> </li>
              </ul>
            </div>
             <form class="news-letter mt-3">
               <input type="email" placeholder="Email của bạn" class="form-control placeholder">
               <a class="button red mt-3" href="#">Gửi</a>
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
  <script type="text/javascript" src="{{asset('front-end\js\select\jquery-select.js')}}"></script>

  <!-- magnific popup -->
  <script type="text/javascript" src="{{asset('front-end\js\magnific-popup\jquery.magnific-popup.min.js')}}"></script>

  <!-- revolution -->
  <script type="text/javascript" src="{{asset('front-end\revolution\js\jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\jquery.themepunch.revolution.min.js')}}"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.actions.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.kenburn.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.layeranimation.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.migration.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.navigation.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.parallax.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.slideanims.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end\revolution\js\extensions\revolution.extension.video.min.js')}}"></script>

  <!-- custom -->
  <script type="text/javascript" src="{{asset('front-end\js\custom.js')}}"></script>

  <!-- style customizer  -->
  <script type="text/javascript" src="{{asset('front-end\js\style-customizer.js')}}"></script>

  <script type="text/javascript">
   (function($){
    "use strict";

      var tpj=jQuery;
       var revapi3;
        tpj(document).ready(function() {
          if(tpj("#rev_slider_3_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_3_1");
          }else{
            revapi3 = tpj("#rev_slider_3_1").show().revolution({
              sliderType:"standard",
              sliderLayout:"fullwidth",
              dottedOverlay:"none",
              delay:9000,
              navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                               mouseScrollReverse:"default",
                onHoverStop:"off",
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:false,
                  hide_onleave:false,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:20,
                                      v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:20,
                                      v_offset:0
                  }
                }
              },
              visibilityLevels:[1240,1024,778,480],
              gridwidth:1270,
              gridheight:700,
              lazyType:"none",
              shadow:0,
              spinner:"spinner3",
              stopLoop:"off",
              stopAfterLoops:-1,
              stopAtSlide:-1,
              shuffle:"off",
              autoHeight:"off",
              disableProgressBar:"on",
              hideThumbsOnMobile:"off",
              hideSliderAtLimit:0,
              hideCaptionAtLimit:0,
              hideAllCaptionAtLilmit:0,
              debugMode:false,
              fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
              }
            });
          }
        });
   })(jQuery);

  </script>

