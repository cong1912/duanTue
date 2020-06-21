@extends('front-end.layouts.master')
@section('content')
<!--=================================
 inner-intro -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Đăng Ký - Liên Hệ </h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> HOME</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>ĐĂNG KÝ – LIÊN HỆ</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 contact -->

<section class="contact-2 page-section-ptb white-bg">
  <div class="container">

    <div class="row">
     <div class="col-lg-8 col-sm-12 mb-lg-0 mb-1">
        <div class="gray-form row">
         <div class="col-md-12">

           <form  method="post" action="{{route('contact.store')}}">
               @csrf
            <div class="contact-form">
               <div class="form-group">
                   @include('alerts.success')
                <label for="exampleFormControlInput1"><strong>Họ và tên:</strong></label>
                 <input id="name" type="text" placeholder="Vui lòng nhập họ và tên" class="form-control" name="name">
             </div>
               <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <label for="exampleFormControlInput1"><strong>Email của bạn:</strong></label>
                 <input type="email" placeholder="Vui lòng nhập email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email">
                   @include('alerts.feedback', ['field' => 'email'])
                </div>
                <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                  <label for="exampleFormControlInput1"><strong>Số điện thoại của bạn</strong></label>
                  <input type="phone" placeholder="Vui lòng nhập số điện thoại" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone">
                    @include('alerts.feedback', ['field' => 'phone'])
              </div>
                 <div class="form-group">
                  <label for="exampleFormControlSelect1"><strong class="text-black">Vui lòng chọn hạng bằng</strong></label>
                  <select name="driver’s_license" class="form-control" id="exampleFormControlSelect1">
                    <option value="Bằng B2">Bằng B2</option>
                    <option value="Bằng C">Bằng C</option>
                  </select>
              </div>
                <input type="submit" value="Đăng ký ngay"
                       class="btn btn-outline-danger align-content-center">
               </div>
            </form>
             <div class="mt-5 mt-5">
                 <h3 class="mt-2"><strong>CÂU HỎI THƯỜNG GẶP</strong></h3>
                 <hr>
                 <hr >
                 <hr class="mt-5">        
                 <p style="font-size: 20px" class="mt-3"><strong>Thủ tục học lái xe B2 thế nào?</strong></p>
                 <hr >
                 <p style="font-size: 20px" class="mt-3"><strong>Thủ tục học lái xe B2 thế nào?</strong></p>
                 <hr >
                 <p style="font-size: 20px" class="mt-3"><strong>Thủ tục học lái xe B2 thế nào?</strong></p>
                 <hr >
                 <p style="font-size: 20px" class="mt-3"><strong>Thủ tục học lái xe B2 thế nào?</strong></p>
                 <hr >
                 <p style="font-size: 20px" class="mt-3"><strong>Thủ tục học lái xe B2 thế nào?</strong></p>
             </div>
            <div id="ajaxloader" style="display:none"><img class="center-block" src="{{asset('images\ajax-loader.gif')}}" alt=""></div>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-sm-12">
          <div class="feature-box-3">
            <div class="icon">
               <i class="fa fa-map-marker"></i>
             </div>
             <div class="content">
               <h5>Địa chỉ trụ sở chính </h5>
                <p>40/20 Ấp Bắc, Phường 13, Quận Tân Bình, Thành Phố Hồ Chí Minh. </p>
              </div>
            </div>
            <div class="feature-box-3">
            <div class="icon">
               <i class="fa fa-phone"></i>
             </div>
             <div class="content">
               <h5>Hotline </h5>
                <p> 0899.545.466 </p>
              </div>
            </div>
            <div class="feature-box-3">
            <div class="icon">
               <i class="fa fa-envelope-o"></i>
             </div>
             <div class="content">
               <h5>Email  </h5>
                <p> hoclaitoanquoc@gmail.com</p>
              </div>
            </div>
            <div class="opening-hours gray-bg">
                <h6>Với 5 trung tâm:</h6>
                <ul class="list-style-none">
                  <li><span>  + Dạy nghề lái xe Sài Gòn (Đồng Nai).</span></li>
                  <li><span> + Dạy nghề lái xe Dầu Khí (Bà Rịa – Vũng Tàu).</span></li>
                  <li> <span>+ Dạy nghề lái xe Thanh Long Đỏ (Bình Thuận).</span></li>
                  <li> <span> + Dạy nghề lái xe Ninh Thuận (Ninh Thuận).</span></li>
                  <li><span> + Dạy nghề lái xe Tâm An (Huế).</span></li>
                </ul>
              </div>
         </div>
     </div>
  </div>
</section>

<!--=================================
 contact -->


<!--=================================
 contact-map -->

 <section class="contact-map">
  <div class="container-fluid">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.065601694638!2d106.83645331532591!3d10.958417258803369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDU3JzMwLjMiTiAxMDbCsDUwJzE5LjEiRQ!5e0!3m2!1svi!2s!4v1584787400707!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  </div>
 </section>

<!--=================================
 contact-map -->

 @endsection
