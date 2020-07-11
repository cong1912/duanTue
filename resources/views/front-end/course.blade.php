@extends('front-end.layouts.master')
@section('content')


<!--=================================
 inner-intro -->

 <section class="inner-intro bg-1 bg-overlay-black-50">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">{!!$doc->name!!}</h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">Khóa học</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>{!!$doc->name!!}</span> </li>
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
      <div class="row pb-3">
          <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe lass="embed-responsive-item" src="https://www.youtube.com/embed/O-9qIYffocs" frameborder="0" allowfullscreen allowfullscreen></iframe>
              </div>
          </div>
          <div class="col">
              <div id="getfly-optin-form-iframe-1594020183762"></div> <script type="text/javascript"> (function(){ var r = window.document.referrer != ""? window.document.referrer: window.location.origin; var regex = /(https?:\/\/.*?)\//g; var furl = regex.exec(r); r = furl ? furl[0] : r; var f = document.createElement("iframe"); const url_string = new URLSearchParams(window.location.search); var utm_source, utm_campaign, utm_medium, utm_content, utm_term; if((!url_string.has('utm_source') || url_string.get('utm_source') == '') && document.cookie.match(new RegExp('utm_source' + '=([^;]+)')) != null){ r+= "&" +document.cookie.match(new RegExp('utm_source' + '=([^;]+)'))[0]; } else { r+= url_string.get('utm_source') != null ? "&utm_source=" + url_string.get('utm_source') : "";} if((!url_string.has('utm_campaign') || url_string.get('utm_campaign') == '') && document.cookie.match(new RegExp('utm_campaign' + '=([^;]+)')) != null){ r+= "&" +document.cookie.match(new RegExp('utm_campaign' + '=([^;]+)'))[0]; } else { r+= url_string.get('utm_campaign') != null ? "&utm_campaign=" + url_string.get('utm_campaign') : "";} if((!url_string.has('utm_medium') || url_string.get('utm_medium') == '') && document.cookie.match(new RegExp('utm_medium' + '=([^;]+)')) != null){ r+= "&" +document.cookie.match(new RegExp('utm_medium' + '=([^;]+)'))[0]; } else { r+= url_string.get('utm_medium') != null ? "&utm_medium=" + url_string.get('utm_medium') : "";} if((!url_string.has('utm_content') || url_string.get('utm_content') == '') && document.cookie.match(new RegExp('utm_content' + '=([^;]+)')) != null){ r+= "&" +document.cookie.match(new RegExp('utm_content' + '=([^;]+)'))[0]; } else { r+= url_string.get('utm_content') != null ? "&utm_content=" + url_string.get('utm_content') : "";} if((!url_string.has('utm_term') || url_string.get('utm_term') == '') && document.cookie.match(new RegExp('utm_term' + '=([^;]+)')) != null){ r+= "&" +document.cookie.match(new RegExp('utm_term' + '=([^;]+)'))[0]; } else { r+= url_string.get('utm_term') != null ? "&utm_term=" + url_string.get('utm_term') : "";} f.setAttribute("src", "https://dnlxsaigon.getflycrm.com/api/forms/viewform/?key=ngRKSkqbj9sB7XL3iL1zVDJwORWKOnlUJlJE8EFYU3U6qq1MEk&referrer="+r);f.style.height = "320px"; f.setAttribute("frameborder","0");f.setAttribute("marginheight","0"); f.setAttribute("marginwidth","0");var s = document.getElementById("getfly-optin-form-iframe-1594020183762");s.appendChild(f); })(); </script>
          </div>


      </div>
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
