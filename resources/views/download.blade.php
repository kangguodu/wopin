@extends('layouts.app')

@section('title','我拼-下載APP')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/download.css')}}">
@stop

@section('content')
  
    <div>
        <div class="wp-download-banner">
            <img alt="banner" src="//cdn.pinduoduo.com/assets/img/pdd_download_banner_v9.jpg">
            <img class="wp-download-qrcode" alt="qrcode" src="//cdn.pinduoduo.com/assets/img/organic_bottom_v4.png" style="width: 7.8125%; height: 18.43%; right: 46.09%; bottom: 27.52%;">
            <div class="btn-download" style="width: 8.85%; height: 6.14%; right: 45.57%; bottom: 17.5%;"></div>
        </div>
    </div>

@stop