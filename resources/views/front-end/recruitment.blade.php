@extends('front-end.layouts.master_tuyendung')
@section('content')

<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-50">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
            <h1 class="text-light">TUYỂN DỤNG 3T SÀI GÒN</h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <i class="text-light">3T Sài Gòn tự hào là 1 trong những trung tâm có lượng giáo viên tham gia công tác đào tạo lái xe lớn nhất Thành phố Biên Hòa. Gia nhập gia đình 3T các bạn sẽ được làm việc trong môi trường chuyên nghiệp, linh động. Đồng nghiệp thân thiện, hòa đồng. Quyền lợi, thu nhập hấp dẫn.

             </i>
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
      <div class="col-md-12">
        <div class="section-title">
          <h2>{!!$td->title!!} </h2>
          <div class="separator"></div>
        </div>
     </div>
     <div class="entry-content">
        <p>{!!$td->content!!}</p>
     </div>
      @endforeach
     </div>
  </div>
</section>

<!--=================================
 welcome -->
 
 


@endsection