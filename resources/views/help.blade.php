@extends('layouts.app')

@section('title','我拼-幫助中心')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/help.css')}}">
@stop

@section('content')
    
    <div>
            <div class="mpdd-helps-banner">
                <img src="//mcdn.pinduoduo.com/assets/img/mpdd_help_banner_v1.jpg" alt="banner">
            </div>
            <ul class="mpdd-help-list">
                <li class="mpdd-help-item">
                    <p>新手指南</p>
                    <ul class="mpdd-hi-list">
                        <li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=1')}}">· <span>購物流程<img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></span>
                            </a>
                        </li>
                    </ul>
                </li><li class="mpdd-help-item">
                    <p>交易問題</p>
                    <ul class="mpdd-hi-list">
                        <li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=2')}}">· <span>我拍下來後的商品什麽時候發貨？</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li>
                        <li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=3')}}">· <span>已成團未發貨如何退款？</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li>
                        <li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=4')}}">· <span>沒有收到貨/商家發錯地址了怎麽辦？</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li>
                        <li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=5')}}">· <span>收到商品有問題怎麽辦？</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li>
                        <li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=6')}}">· <span>如何聯系商家客服？</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li>
                        <li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=7')}}">· <span>收到的商品能退換貨麽？</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li>
                    </ul>
                </li>
                <li class="mpdd-help-item">
                    <p>退款&amp;售後問題</p>
                    <ul class="mpdd-hi-list">
                        <li class="mpdd-hil-item">
                           <a href="{{URL('/faq?id=8')}}"> · <span>退換貨流程</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li><li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=9')}}">· <span>退換貨規則</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li><li class="mpdd-hil-item">
                            <a href="{{URL('/faq?id=10')}}">· <span>7天無理由退換貨</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li>
                    </ul>
                </li>
                <li class="mpdd-help-item">
                    <p>聯系我們</p>
                    <ul class="mpdd-hi-list">
                        <li class="mpdd-hil-item">
                           <a href="{{URL('/faq?id=11')}}"> · <span>如何聯系拼多多客服？</span>
                            <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" class="arrow"></a>
                        </li>
                    </ul>
                </li>
            </ul>

    </div>

@stop