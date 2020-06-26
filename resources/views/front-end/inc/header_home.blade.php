<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template">
<meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template">
<meta name="author" content="potenzaglobalsolutions.com">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>TRUNG TÂM DẠY NGHỀ LÁI XE SÀI GÒN</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('front-end\images\SaiGon.png')}}">

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\bootstrap.min.css')}}">

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\flaticon.css')}}">

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\mega-menu\mega_menu.css')}}">

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\font-awesome.min.css')}}">

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\owl-carousel\owl.carousel.css')}}">

<!-- jquery-ui -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\jquery-ui.css')}}">

<!-- revolution -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\revolution\css\settings.css')}}">

<!-- main style -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\style.css')}}">

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\responsive.css')}}">

<!-- Style customizer -->
<link rel="stylesheet" href="#" data-style="styles">
<link rel="stylesheet" type="text/css" href="{{asset('front-end\css\style-customizer.css')}}">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-557RCPW');</script>
<!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


  

<!--=================================
 header -->

<header id="header" class="topbar-dark">

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
            <a href="{{route('trangchu')}}"><img src="{{asset('front-end/images/SaiGon.png')}}" alt="logo"> </a>
            </li>
        </ul>
      <!-- menu links -->
      <ul class="menu-links">
        <!-- active class -->
        <li><a href="{{route('gioithieu')}}"> GIỚI THIỆU </a>
             <!-- drop down multilevel  -->
           
        </li>
        <li><a href="javascript:void(0)">KHÓA HỌC <i class="fa fa-angle-down fa-indicator"></i></a>
          <ul class="drop-down-multilevel">
            @foreach ($ten_khoahoc as $ten_khoahoc)
            <li><a href="{{route('khoahoc',$ten_khoahoc->id)}}">{{$ten_khoahoc->name}}</a></li>
            @endforeach
        </ul>
        </li>
        <li ><a href="javascript:void(0)">TRA CỨU <i class="fa fa-angle-down fa-indicator"></i></a>
          <ul class="drop-down-multilevel">
            @foreach ($tracuu as $tracuu )
            <li><a href="{{route('tracuu',$tracuu->id)}}" style="font-size:10px">{{$tracuu->title}}</a></li>
            @endforeach
        </ul>
        </li>
        <li><a href="javascript:void(0)">PHẦN MỀM  <i class="fa fa-angle-down fa-indicator"></i></a> 
           <!-- drop down multilevel  -->
            <ul class="drop-down-multilevel">
              @foreach ($phanmem as $phanmem )
              <li><a href="{{route('phanmem',$phanmem->id)}}">{{$phanmem ->name}}</a></li>
              @endforeach
            </ul>
        </li>
        <li><a href="{{route('tintuc')}}">TIN TỨC  </a> 
        </li>
        <li><a href="{{route('tuyendung')}}"> TUYỂN DỤNG </a>
        </li>
        <li><a href="{{route('lienhe')}}"> LIÊN HỆ</a>
        </li>
        <li>
          <div class="search-top"> <a class="search-btn not_click d-none d-lg-block" href="#">Search Button</a>
            <div class="search-box">
              <div class="row">
                <form role="search" method="get"  action="{{route('timkiem')}}">
                 <div class="selected-box">
                  <input type="text" name="key" class="form-control ml-3" style="width: 1100px" placeholder="Nhập từ khóa...">
                </div>
                </form>
                </div>
              </div>
             </div>
           </div>
         </li>
        </ul>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->