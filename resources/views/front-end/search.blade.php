@extends('front-end.layouts.master')
@section('content')

<!--=================================
 inner-intro  -->

 <section class="inner-intro bg-1 bg-overlay-black-50">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
           <h3 class="text-white">{!!$search->title!!}</h3>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Tra cứu </span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro  -->


<!--=================================
 blog  -->

<section class="blog blog-right-sidebar page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-md-8">
        <div class="blog-entry">
          <div class="blog-entry-image  clearfix">
             <div class="portfolio-item">
               <img class="img-fluid" src="/storage/{!!$search->image!!}" width="740px">
              </div>
            </div>
            <div class="entry-title mt-5 mb-4">
              <a href="#" style="font-size: 25px">{!!$search->title!!}</a>
              </div>
          <div class="entry-content" >
            <p>{!!$search->content!!}</p>
          </div>
          </div>
          <hr class="gray">
     </div>
      <div class="col-md-4">
        <div class="blog-sidebar">
          <div class="sidebar-widget">
            <h6>VỀ CHÚNG TÔI</h6>
            <div class="widget-link">
               <ul>
                <p>Là một trong những công ty tiên phong về lĩnh vực dạy lái xe ô tô và xe tải hàng đầu tại Việt Nam. Đến với 3T, khách hàng sẽ được hỗ trợ tối đa khi học lái xe hạng B1 , B2 , C , D , E , F v.v… phù hợp với từng mục đích lái xe khác nhau.</p>
               </ul>
              </div>
          </div>
          <div class="sidebar-widget">
            <h6>TRA CỨU</h6>
            @foreach($new_nav as $nw)
            <div class="recent-post">
             <div class="recent-post-image">
              <img src="/storage/{!!$nw->image!!}" alt="">
             </div>
             <div class="recent-post-info">
               <a href="{{route('chitiet-tintuc',$nw->slug)}}">{!!$nw->title!!} </a>
              <span><i class="fa fa-calendar"></i> {!!$nw->updated_at!!}</span>
             </div>
            </div>
            @endforeach
            <div class="gray"></div>
         </div>
         <div class="sidebar-widget">
           <h6>TỪ KHÓA</h6>
            <div class="tags">

             <ul>
              @foreach ($key as $key)
              <li><a  href="/timkiem?key={!!$key->bancong!!}">{!!$key->keyword!!}</a></li>
              @endforeach
            </ul>

           </div>
         </div>
        </div>
      </div>
     </div>
   </div>
</section>

<!--=================================
blog -->

@endsection
