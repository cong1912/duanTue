@extends('front-end.layouts.master')
@section('content')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->





<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h3 class="text-white">{!!$search->title!!} </h3>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> HOME</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">Tra cứu</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>{!!$search->title!!}</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->

<div class="mt-5 ml-5 mr-5">
<img src="/images/{!!$search->image!!}" width="1250px">
    <p class="mt-2 mr-5 ml-5" style="font-size: 20px">{!!$search->content!!}</p>
    <br><br><br>
</div>
 

@endsection
