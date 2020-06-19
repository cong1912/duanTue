@extends('front-end.layouts.master')
@section('content')
<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">VỀ CHÚNG TÔI 3T SÀI GÒN</h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
               <li><span>Giới thiệu</span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 welcome -->

<section class="welcome-4 page-section-ptb white-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="section-title">
           <p>{!!$introduce->content!!}</p>
         </div>
      </div>
    </div>
    </div>
</section>

<!--=================================
 welcome -->

<hr class="gray">
 
 

<!--=================================
 contact-map -->

 <section class="contact-map mb-5">
  <div class="container-fluid">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.065601694638!2d106.83645331532591!3d10.958417258803369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDU3JzMwLjMiTiAxMDbCsDUwJzE5LjEiRQ!5e0!3m2!1svi!2s!4v1584787400707!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  </div>
 </section>

<!--=================================
 contact-map -->
 @endsection