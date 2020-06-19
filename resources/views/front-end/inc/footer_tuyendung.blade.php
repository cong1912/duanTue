
<!--=================================
 footer -->

 <footer class="footer bg-3 bg-overlay-black-90">
    <div class="container">
      <hr class="gray">
      <div class="copyright">
       <div class="row">
        <div class="col-lg-6 col-md-12">
         <div class="text-lg-left">
          <p>Copyright © 2020 3T Sài Gòn  <span class="text-light">– OnePress theme by FameThemes </span></p>
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
      <span><img src="{{asset('front-end\images\car.png')}}"></span>
    </div>
    
     <!--=================================
     back to top -->
    
    <!--=================================
     jquery -->
    
    <!-- jquery  -->
    <script type="text/javascript" src="{{asset('front-end\js\jquery-3.3.1.min.js')}}"></script>
     
    <!-- bootstrap -->
    <script type="text/javascript" src="{{asset('front-end\js\popper.js')}}"></script>
    <script type="text/javascript" src="j{{asset('front-end\s\bootstrap.min.js')}}"></script>
    
    <!-- mega-menu -->
    <script type="text/javascript" src="{{asset('front-end\js\mega-menu\mega_menu.js')}}"></script>
    
    
  <!-- appear -->
  <script type="text/javascript" src="js\jquery.appear.js"></script>
  
  <!-- counter -->
  <script type="text/javascript" src="js\counter\jquery.countTo.js"></script>
  
  <!-- owl-carousel -->
  <script type="text/javascript" src="js\owl-carousel\owl.carousel.min.js"></script>
  
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
    