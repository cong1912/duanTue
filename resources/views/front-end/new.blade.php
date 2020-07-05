﻿@extends('front-end.layouts.master')
@section('content')

<!--=================================
 inner-intro  -->

 <section class="inner-intro bg-1 bg-overlay-black-50">
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

<section class="blog blog-right-sidebar page-section-ptb">
  <div class="container">
    <div class="row">

     <div class="col-md-8">
      @foreach ($newki as $new)
        <div class="blog-entry">
          <div class="entry-title">
            <strong>TIN TỨC</strong>
            <a href="{{route('chitiet-tintuc',$new->id)}}" style="font-size: 25px">{!!$new->title!!}</a>
            <hr class="mt-2" style="width: 53px;">
            </div>
          <div class="blog-entry-image  clearfix">
             <div class="portfolio-item">
<<<<<<< HEAD
               <img class="img-fluid" src="{{asset('storage/'.$new->image)}}" width="740px">
=======
               <img class="img-fluid" src="{{ asset('storage/'.$new->image) }}" width="740px" height="371.938px">
>>>>>>> c7552d580871145b92396a5fe5ec5df318dde82d
              </div>
            </div>

          <div class="entry-content">
            <p>{!!$new->tomtat!!}</p>
          </div>
           <div class="entry-share clearfix">
           <a class="button red float-left" href="{{route('chitiet-tintuc',$new->slug)}}"> ĐỌC TIẾP </a>
             <div class="share float-right"><a href="#"> <i class="fa fa-share-alt"></i> </a>
                  <div class="blog-social">
                   <ul class="list-style-none">
                    <li> <a href="https://www.facebook.com/trungtam3tsaigondongnai/"><i class="fa fa-facebook"></i></a> </li>
                   </ul>
                   </div>
                 </div>
             </div>
          </div>
          <hr class="gray">
          @endforeach
          <div class="pagination-nav  d-flex justify-content-center">
            <ul class="pagination">
               {!! $newki->links() !!}
            </ul>
        </div>
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
<<<<<<< HEAD
              <img src="/storage/{!!$nw->image!!}" alt="">
=======
              <img src="{{ asset('storage/'.$nw->image) }}" alt="">
>>>>>>> c7552d580871145b92396a5fe5ec5df318dde82d
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

              <li><a class="mb-2" href="/timkiem?key={!!$key->bancong!!}">{!!$key->keyword!!}</a></li>
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
