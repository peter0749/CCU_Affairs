@extends('layouts.affairs_layout')
@section('title','中正大學總務處')
@section('metadata')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">-->
<!-- Fonts -->
<link rel="stylesheet" href="{{URL::asset('/css/main_page.css')}}">
<style> 
#main_navbar {
    background-image: url("{{URL::asset('/images/navbar_img_opt.png')}}");
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
@endsection
@section('default_sidebar')
<nav class="sidebar-nav" role="navigation">
      <ul class="nav">
        <li><a class="disabled" style="pointer-events:none"><span><img id="ccu_logo" src="{{URL::asset('/images/ccu_logo.svg')}}" alt="ccu_logo.svg" /></span><span>國立中正大學</span></a></li>
        @include('ccu.dropdown-menu')
        @yield('extra_sidebar')
      </ul>
</nav> 
@endsection
@section('header')
<nav class="nav navbar-nav navbar-inverse" id="main_navbar">
   <div class="container-fluid" >
      <div style="float:left">
          <button type="button" class="navbar-toggle btn btn-default navbar-brand" data-toggle="collapse" data-target="#mobileNavbar">
          <font style="color:white"><span><img id="ccu_logo" src="{{URL::asset('/images/ccu_logo.svg')}}" alt="ccu_logo.svg" /></span>國立中正大學
          <span class="caret"></span>
          </font>
          </button>
      </div>
      <div class="collapse navbar-collapse" id="mobileNavbar" style="float:right; width:100%;">
         <ul class="nav navbar-nav">
            <li class="dropdown"><a href="{{URL::asset('/news/news')}}">最新消息<span class="caret"/></a>
                <ul class="dropdown-menu">
                    @include('news.sidebar')
                </ul>
            </li>
            <!--li><a href="{{URL::asset('/nyan')}}">測試頁籤</a></li-->
            <li class="dropdown">
               <a href="{{URL::asset('/leader/news')}}">總務長室<span class="caret"></span></a>
               <ul class="dropdown-menu">
                    @include('leader.sidebar')
               </ul>
            </li>
            <li class="dropdown">
               <a  href="{{URL::asset('/affair/news')}}">事務組<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  @include('affair.sidebar')
               </ul>
            </li>
            <li class="dropdown">
               <a  href="{{URL::asset('/cashier/news')}}">出納組<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  @include('cashier.sidebar')
               </ul>
            </li>
            <li class="dropdown">
               <a  href="{{URL::asset('/property/news')}}">保管組<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  @include('property.sidebar')
               </ul>
            </li>
            <li class="dropdown">
               <a  href="{{URL::asset('/construction/news')}}">營繕組<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  @include('construction.sidebar')
               </ul>
            </li>
            <li class="dropdown">
               <a  href="{{URL::asset('/security/news')}}">駐警隊<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  @include('security.sidebar')
               </ul>
            </li>
            <li class="dropdown">
               <a  href="{{URL::asset('/dining/news')}}">民服會<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  @include('dining.sidebar')
               </ul>
            </li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#"><span class="glyphicon glyphicon-link"></span> 其他處室<span class="caret"/></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li>
                     <a target="_BLANK" href="http://140.123.13.101/">校長室</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://secretar.ccu.edu.tw/vicepre2.html">副校長室</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://secretar.ccu.edu.tw/main/">秘書室</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://oaa.ccu.edu.tw/oaa1/">教務處</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://studaffbh.ccu.edu.tw/">學務處</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://affairs.ccu.edu.tw/">總務處</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://www.rd.ccu.edu.tw/">研發處</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://oia.ccu.edu.tw/">國際處</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://sport.ccu.edu.tw/bin/home.php">體育中心</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://advising.ccu.edu.tw/">輔導中心</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://account.ccu.edu.tw/">主計室</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://person.ccu.edu.tw/">人事室</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://www.lib.ccu.edu.tw/">圖書館</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="https://center.ccu.edu.tw/">電算中心</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://www.ccunix.ccu.edu.tw/~deptehsc/">環安中心</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://cjlc.ccu.edu.tw/main.php">清江學習中心</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://secretar.ccu.edu.tw/secretar_web/organization_03.php">媒體暨公關中心</a>
                  </li>
                  <li>
                     <a target="_BLANK" href="http://tecapp.ccu.edu.tw/">教學卓越計畫辦公室</a>
                  </li>
               </ul>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> 管理後台</a></li>
         </ul>
      </div>
   </div>
</nav>
@endsection
@section('mountain_image')
<div>
   <img src="{{URL::asset('/images/title.jpg')}}" class="img-responsive center-block" id="affair_mountain"/>
</div>
@endsection
@section('footer')
<div>
   <p>
   <center><font size="-1">網頁如有問題，請連絡<a href="mailto:general@ccu.edu.tw ">general@ccu.edu.tw</a> 嚴振賓</font></center>
   <p>
   <center>
   <!-- javascript show the last modify date  / -->
   <font size="-1">
<script language="JavaScript">
var lastModDate = new Date(document.lastModified);
document.write("最近檢視維護日：" +lastModDate.toDateString());
</script>
   </font>
   <center>
   <!-- javascript --> 
</div>
@endsection
