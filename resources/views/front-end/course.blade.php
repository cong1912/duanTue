@extends('front-end.layouts.master')
@section('content')


<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Hạng B2</h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">Khóa học</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Hạng B2</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
privacy-policy  -->

<section class="privacy-policy page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
    {!!$doc->content!!}

  </div> 
    </div>
   </div>
</section>

<!--=================================
privacy-policy  -->
 
  
@endsection