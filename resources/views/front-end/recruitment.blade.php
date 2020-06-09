@extends('front-end.layouts.master')
@section('content')

<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 welcome -->

<section class="welcome-3 white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
           <h2>HỆ THỐNG 3T SÀI GÒN </h2>
           <div class="separator"></div>
        </div>
      </div>
     </div>
    <div class="row">
      <div class="col-md-4">
        <div class="content-box-2 car-bg-1">
            <i class="glyph-icon flaticon-beetle"></i>
            <a class="title" href="#">Buy a Car</a>
            <p>We sell perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content-box-2 car-bg-2">
            <i class="glyph-icon flaticon-price-tag"></i>
            <a class="title" href="#">Sell My Car</a>
            <p>You can sell sed ut unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content-box-2 car-bg-3">
            <i class="glyph-icon flaticon-reparation"></i>
            <a class="title" href="#">Get Service</a>
            <p>We provide sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
        </div>
      </div>
    </div>
    <div class="row about custom-block-2">
      <div class="col-md-6">
        <h2>VỀ CHÚNG TÔI </h2>
        <span>Everything you need to build an amazing dealership website. </span> 
        <p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an <b>Amazing dealership website </b> developed especially for car sellers, dealers or auto motor retailers. You can use this template for creating website based on any framework and any language </p>
      </div>
      <div class="col-md-6">
        <img class="img-fluid center-block" src="{{asset('front-end\images\car\11.png')}}" alt="">
       </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="feature-box-2 box-hover active">
         <div class="icon">
           <i class="glyph-icon flaticon-beetle"></i>
         </div> 
         <div class="content">
          <h5>All brands</h5>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-interface-1"></i>
         </div> 
         <div class="content">
          <h5>Free Support</h5>
          <p>Omnis sed ut perspiciatis unde iste natus error sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-key"></i>
         </div> 
         <div class="content">
          <h5>Dealership</h5>
          <p>Error sed ut perspiciatis unde omnis iste natus sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-wallet"></i>
         </div> 
         <div class="content">
          <h5>Affordable</h5>
          <p>Perspiciatis sed ut unde omnis iste natus error sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
 welcome -->
 
 
<!--=================================
 feature-car -->

<section class="feature-car gray-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <h2>CHÚNG TÔI CẦN BẠN </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
 <div class="row">
  <div class="col-md-12">
   <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-space="15">
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="{{asset('front-end\images\car\01.jpg')}}" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">Acura Rsx</a>
          <div class="car-list">
           <ul class="list-inline">
             <li> 2017</li>
             <li>  Manual </li>
             <li>  210 hp </li>
             <li> 6,000 mi</li>
           </ul>
           </div>
           <div class="info"> 
             <p>You will begin to realize why this exercise Pattern is called the Dickens with to ghost.</p>
           </div>
           <div class="price">
             <span class="old-price">$29,568</span>
             <span class="new-price">$26,598 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="{{asset('front-end\images\car\02.jpg')}}" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">Lexus GS 450h</a>
          <div class="car-list">
           <ul class="list-inline">
             <li> 2017</li>
             <li>  Manual </li>
             <li>  210 hp </li>
             <li> 6,000 mi</li>
           </ul>
           </div>
           <div class="info"> 
             <p>Dickens with to ghost you will begin to realize why this exercise Pattern is called the.</p>
           </div>
           <div class="price">
             <span class="old-price">$40,968</span>
             <span class="new-price">$36,558 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="{{asset('front-end\images\car\03.jpg')}}" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">GTA 5 Lowriders DLC</a>
          <div class="car-list">
           <ul class="list-inline">
             <li> 2017</li>
             <li>  Manual </li>
             <li>  210 hp </li>
             <li> 6,000 mi</li>
           </ul>
           </div>
           <div class="info"> 
             <p>realize why this dickens with to ghost you will begin to exercise Pattern is called the.</p>
           </div>
           <div class="price">
             <span class="old-price">$35,568</span>
             <span class="new-price">$32,698 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="{{asset('front-end\images\car\05.jpg')}}" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">Toyota avalon hybrid </a>
          <div class="car-list">
           <ul class="list-inline">
             <li> 2017</li>
             <li>  Manual </li>
             <li>  210 hp </li>
             <li> 6,000 mi</li>
           </ul>
           </div>
           <div class="info"> 
             <p>Dickens with to ghost realize why this you will begin to exercise Pattern is called the.</p>
           </div>
           <div class="price">
             <span class="old-price">$44,768</span>
             <span class="new-price">$33,698 </span>
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
 feature-car -->

  
<!--=================================
 our-service -->

<section class="our-service white-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-7">
      <h2>HÌNH ẢNH VỀ 3T SÀI GÒN</h2>
      <span>We provide best services processus dynamicus, qui sequitur mutationem co</span>
      <div class="row">
        <div class="col-md-6">
         <div class="feature-box-2">
          <div class="icon">
           <i class="glyph-icon flaticon-wallet"></i>
          </div> 
          <div class="content">
          <h5>Affordable</h5>
          <p>Laudantium perspiciatis sed ut unde omnis iste natus error sit voluptatem acantium doloremque.</p>
         </div>
        </div>
        </div>
        <div class="col-md-6">
         <div class="feature-box-2">
          <div class="icon">
           <i class="glyph-icon flaticon-gas-station"></i>
          </div> 
          <div class="content">
          <h5>Oil Changes</h5>
          <p>Voluptatem perspiciatis sed ut unde omnis iste natus error sit acantium doloremque laudantium.</p>
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
          <h5>Air conditioning</h5>
          <p>Natus perspiciatis sed ut unde omnis iste error sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
        </div>
        <div class="col-md-6">
         <div class="feature-box-2">
          <div class="icon">
           <i class="glyph-icon flaticon-gearstick"></i>
          </div> 
          <div class="content">
          <h5>transmission</h5>
          <p>Omnis perspiciatis sed ut unde iste natus error sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
        </div>
      </div>  
     </div>
     <div class="col-md-5">
       <img class="img-fluid" src="{{asset('front-end\images\car\12.jpg')}}" alt="">
     </div>
   </div>
  </div>
</section>   

<!--=================================
 our-service -->


<!--=================================
 latest news -->

<section class="latest-blog gray-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <h2>IN TỨC TUYỂN DỤNG </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
   <div class="row">
     <div class="col-lg-4 col-md-12">
        <div class="blog-2">
          <div class="blog-image">
            <img class="img-fluid" src="{{asset('front-end\images\blog\05.jpg')}}" alt="">
            <div class="date">
              <span>aug 17</span>
            </div>
          </div>
          <div class="blog-content">
            <div class="blog-admin-main">
             <div class="blog-admin">
              <img class="img-fluid" src="{{asset('front-end\images\team\01.jpg')}}" alt="">
              <span>John Doe</span>
             </div>
             <div class="blog-meta float-right">
               <ul>
                 <li><a href="#"> <i class="fa fa-comment"></i><br> 123</a></li>
                 <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br> ...</a>
                  <div class="blog-social"> 
                   <ul>
                    <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                   </ul>
                   </div>
                 </li>
               </ul>
             </div>
            </div>
            <div class="blog-description text-center">
               <a href="#">Does Your Life Lack Meaning</a>
               <div class="separator"></div>
              <p>You will begin to realize why this exercise Pattern is called the Dickens with reference to the ghost</p>
            </div>
          </div>
        </div>
     </div>
   <div class="col-lg-4 col-md-12">
        <div class="blog-2">
          <div class="blog-image">
            <img class="img-fluid" src="{{asset('front-end\images\blog\06.jpg')}}" alt="">
            <div class="date">
              <span>aug 17</span>
            </div>
          </div>
          <div class="blog-content">
            <div class="blog-admin-main">
             <div class="blog-admin">
              <img class="img-fluid" src="{{asset('front-end\images\team\02.jpg')}}" alt="">
              <span>Paul Flavius</span>
             </div>
             <div class="blog-meta float-right">
               <ul>
                 <li><a href="#"> <i class="fa fa-comment"></i><br> 123</a></li>
                 <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br> ...</a>
                  <div class="blog-social"> 
                   <ul>
                    <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                   </ul>
                   </div>
                 </li>
               </ul>
             </div>
            </div>
            <div class="blog-description text-center">
               <a href="#">The A Z Of Motivation</a>
               <div class="separator"></div>
              <p>Exercise is called you will begin to Pattern realize why this the Dickens Pattern with reference to ghost</p>
            </div>
          </div>
        </div>
     </div>
     <div class="col-lg-4 col-md-12">
        <div class="blog-2">
          <div class="blog-image">
            <img class="img-fluid" src="{{asset('front-end\images\blog\07.jpg')}}" alt="">
            <div class="date">
              <span>aug 17</span>
            </div>
          </div>
          <div class="blog-content">
            <div class="blog-admin-main">
             <div class="blog-admin">
              <img class="img-fluid" src="{{asset('front-end\images\team\03.jpg')}}" alt="">
              <span>Sara Lisbon</span>
             </div>
             <div class="blog-meta float-right">
               <ul>
                 <li><a href="#"> <i class="fa fa-comment"></i><br> 123</a></li>
                 <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br> ...</a>
                  <div class="blog-social"> 
                   <ul>
                    <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                   </ul>
                   </div>
                 </li>
               </ul>
             </div>
            </div>
            <div class="blog-description text-center">
               <a href="#">Motivation In Life</a>
               <div class="separator"></div>
              <p>Dickens Pattern you will begin to realize why this Dickens exercise is the with reference to the ghost</p>
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
     <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-space="30">
       <div class="item">
        <div class="testimonial-block">
         <div class="row">
           <div class="col-md-3">
            <div class="testimonial-avtar">
              <img class="img-fluid center-block" src="{{asset('front-end\images\team\01.jpg')}}" alt="">
            </div>   
           </div>  
           <div class="col-lg-9 col-md-9 col-sm-9">
             <div class="testimonial-content">
               <p><i class="fa fa-quote-left"></i> <span>Type and bled it to make lorem Ipsum is simply dummy text of the printin a galley of a type specimen book. It has survived not only five centuries, but also the leap into electronictting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</span> <i class="fa fa-quote-right float-right"></i></p>
             </div> 
             <div class="testimonial-info">
              <h6>Alice Williams</h6>
              <span>Auto Dealer</span>
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
              <img class="img-fluid center-block" src="{{asset('front-end\images\team\02.jpg')}}" alt="">
            </div>   
           </div>  
           <div class="col-lg-9 col-md-9 col-sm-9">
             <div class="testimonial-content">
               <p><i class="fa fa-quote-left"></i> <span>It was popularised in the 1960s lorem Ipsum is simply dummy text of the printin a galley of type and bled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronictting, remaining essentially unchanged. with the release of Letraset sheets containing Lorem Ipsum passages.</span> <i class="fa fa-quote-right float-right"></i></p>
             </div> 
             <div class="testimonial-info">
              <h6>Michael Bean</h6>
              <span>Car Dealer</span>
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
              <img class="img-fluid center-block" src="{{asset('front-end\images\team\03.jpg')}}" alt="">
            </div>   
           </div>  
           <div class="col-lg-9 col-md-9 col-sm-9">
             <div class="testimonial-content">
               <p><i class="fa fa-quote-left"></i> <span>Remaining essentially unchanged lorem Ipsum is simply dummy text of the printin   a galley of type and bled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronictting. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</span> <i class="fa fa-quote-right float-right"></i></p>
             </div> 
             <div class="testimonial-info">
              <h6>Anne Smith</h6>
              <span>Customer</span>
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
      <h4 class="text-red">LIÊN HỆ ĐẾN CHÚNG TÔI</h4>
      <p class="text-white">Simply Dummy Text of the Printin  Galley of Type and Bled it to Make a Type.</p>
     </div>
     <div class="col-md-6">
        <form class="news-letter-form">
           <div class="row no-gutter">
            <div class="col-md-10 col-9"><input type="email" placeholder="Enter your Email" class="form-control placeholder"></div>
            <div class="col-md-2 col-3"><a class="button red" href="#">GỬI</a></div>
           </div>
         </form>
     </div>
    </div>
  </div>
</section> 

 <!--=================================
 Newsletter -->
@endsection