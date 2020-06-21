@extends('front-end.layouts.master')
@section('content')

<!--=================================
 inner-intro  -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
           <h3 class="text-white">Tin tức</h3>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Tin tức </span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro  -->


<!--=================================
 blog  -->
<div class="text-center mt-5"><h5><strong>SEARCH RESULTS FOR: </strong> </h5></div>

<section class="blog blog-right-sidebar page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-md-8">
      @foreach ($new as $new)
        <div class="blog-entry">
          <div class="entry-title">
          <strong>TIN TỨC</strong>
            <a href="{{route('chitiet-tintuc',$new->id)}}" style="font-size: 25px">{!!$new->title!!}</a>
            <hr class="mt-2" style="width: 53px;">
            </div>
          <div class="blog-entry-image  clearfix mt-4">
             <div class="portfolio-item">
               <img class="img-fluid" src="/images/{{$new->image}}" width="740px">
              </div>
            </div>
            
          <div class="entry-content">
            <p>{!!$new->tomtat!!}</p>
          </div>
           <div class="entry-share clearfix">
           <a class="button red float-left" href="{{route('chitiet-tintuc',$new->id)}}"> ĐỌC TIẾP </a>
             <div class="share float-right"><a href="#"> <i class="fa fa-share-alt"></i> </a>
                  <div class="blog-social"> 
                   <ul class="list-style-none">
                    <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-envelope"></i></a> </li>
                   </ul>
                   </div>
                 </div>
             </div>
          </div>
          <hr class="gray">
          @endforeach
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
            <h6>TIN TỨC</h6>
            @foreach($new_nav as $nw)
            <div class="recent-post">
             <div class="recent-post-image">
              <img src="/images/{!!$nw->image!!}" alt="">
             </div>
             <div class="recent-post-info">
               <a href="{{route('chitiet-tintuc',$nw->id)}}">{!!$nw->title!!} </a>
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
              <li><a href="#">{!!$key->keyword!!}</a></li>
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