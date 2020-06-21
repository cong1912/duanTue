@extends('front-end.layouts.master_tuyendung')
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
      @foreach ($td as $td)
      {!!$td->content!!}
      @endforeach
     </div>
  </div>
</section>

<!--=================================
 welcome -->
 
 


@endsection