<!DOCTYPE html>
<head>
      <meta charset="utf-8">
      <title>@yield('title')</title>
      <meta http-equiv="Cache-Control" content="no-cache,no-store,must-revalidate">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="0">
      <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <!-- HTML5 Shiv 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]--> 
   
      <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
      <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
      <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
      
      @yield('css')


</head>
<html>
   <body>
      @include('header')
      <div>
         @yield('content')
      </div>
      <div style="margin-top:50px">
      @include('footer') 
      </div>     
   </body>

   @yield('script')
</html>
