
<!--=================================
 footer -->

 <footer class="footer bg-3 bg-overlay-black-90">
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="about-content">
          <h6 class="text-white">VỀ CHÚNG TÔI</h6>
          <p class="mt-4">Có hệ thống cơ sở nhiều nhất việt nam (5 cơ sở) có quy mô đào tạo lớn nhất việt nam là một trong những đơn vị duy nhất có sân tập công nghệ singapore kiểm soát giờ tập bằng công nghệ vân tay giám sát trực tuyến việc dạy, học qua camera và GPS</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="usefull-link">
        <h6 class="text-white">TIN TỨC MỚI NHẤT</h6>
          <ul class="mt-3">
            @foreach ($tintuc as $tintuc)
          <li><a href="{{route('chitiet-tintuc',$tintuc->id)}}"><i class="fa fa-angle-double-right"></i>{{$tintuc->title}}</a></li>
          @endforeach
          </ul>
        </div> 
      </div>
      <div class="col-lg-3 col-md-6">
         <h6 class="text-light mb-4">TỪ KHÓA </h6>
         <div class="tags">
          <ul>
           @foreach ($key as $key)
           <a class="btn btn-outline-secondary mb-2 " style="font-style: normal; font-size: 13px" href="/timkiem?key={!!$key->bancong!!}">{!!$key->keyword!!}</a>
           @endforeach
         </ul>
        </div>
       </div>
      <div class="col-lg-3 col-md-6">
        <div class="news-letter">
        <h6 class="text-white mb-4">THÔNG TIN 3T SÀI GÒN </h6>
        <div class="address">
          <ul>
            <li> <i class="fa fa-map-marker"></i><span>205C Phạm Văn Thuận, Phường Tân Tiến, Biên Hòa, Đồng Nai.</span> </li>
            <li> <i class="fa fa-phone"></i><span>0899.545.466</span> </li>
            <li> <i class="fa fa-envelope-o"></i><span>hoclaitoanquoc@gmail.com</span> </li>
          </ul>
        </div>
         <form class="news-letter mt-4">
           <input type="email" placeholder="Email của bạn" class="form-control placeholder">
           <a class="button red" href="#">Gửi</a>
         </form>
        </div> 
      </div>
    </div>
    <hr>
    <div class="copyright">
     <div class="row">
      <div class="col-lg-6 col-md-12">
       <div class="text-lg-left text-center">
        <p>Phát triển 2020 © <span class="text-light">Học lái toàn quốc </span></p>
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
  <script type="text/javascript" src="{{asset('front-end\s\bootstrap.min.js')}}"></script>
  
  <!-- mega-menu -->
  <script type="text/javascript" src="{{asset('front-end\js\mega-menu\mega_menu.js')}}"></script>
  
  
<!-- appear -->
<script type="text/javascript" src="{{asset('front-end\js\jquery.appear.js')}}"></script>

<!-- counter -->
<script type="text/javascript" src="{{asset('front-end\js\counter\jquery.countTo.js')}}"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="{{asset('front-end\js\owl-carousel\owl.carousel.min.js')}}"></script>

  <!-- select -->
  <script type="text/javascript" src="{{asset('front-end\js\select\jquery-select.js')}}"></script>
  
  <!-- magnific popup -->
  <script type="text/javascript" src="{{asset('front-end\js\magnific-popup\jquery.magnific-popup.min.js')}}"></script>
  
  <!-- style customizer  -->
  <script type="text/javascript" src="{{asset('front-end\js\style-customizer.js')}}"></script>
   
  <!-- custom -->
  <script type="text/javascript" src="{{asset('front-end\js\custom.js')}}"></script>
    
 
<script type="text/javascript">
  (function($){
 "use strict";

   var tpj=jQuery;
     var revapi2;
     tpj(document).ready(function() {
       if(tpj("#rev_slider_2_1").revolution == undefined){
         revslider_showDoubleJqueryError("#rev_slider_2_1");
       }else{
         revapi2 = tpj("#rev_slider_2_1").show().revolution({
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
             bullets: {
               enable:true,
               hide_onmobile:false,
               style:"hermes",
               hide_onleave:false,
               direction:"horizontal",
               h_align:"center",
               v_align:"bottom",
               h_offset:0,
               v_offset:50,
                               space:10,
               tmp:''
             }
           },
           visibilityLevels:[1240,1024,778,480],
           gridwidth:1570,
           gridheight:1000,
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
  </body>
  </html>
  