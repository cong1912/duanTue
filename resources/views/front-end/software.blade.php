﻿@extends('front-end.layouts.master')
@section('content')


<!--=================================
 inner-intro -->

 <section class="inner-intro bg-1 bg-overlay-black-50">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">{{$sof->name}} </h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">Phần mềm</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>{{$sof->name}}</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
career  -->

<section class="career page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
     <img class="img-fluid center-block" style="height: 365px" src="{{ asset('storage/'.$sof->image) }}">
        <div class="career-info">
          <p>{!!$sof->content!!} </p>
        </div>
      <div class="row">
        <a href="{!!$sof->link_android!!} " class="mb-3">
        <img class="img-fluid col-lg-6 pull-right " width="400px" height="160px" src="/front-end/images/ANDROID.png">   
      </a>
      <a href="{!!$sof->link_ios!!}">
        <img class="img-fluid col-lg-6  "  width="400px" height="160px" src="/front-end/images/IOS.png">
      </a>
    </div>
      </div>
     </div>
   </div>
</section>

<!--=================================
career  -->

 @endsection
