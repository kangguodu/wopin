@extends('layouts.app')

@section('title','我拼-首頁')

@section('css')

<link rel="stylesheet" href="{{asset('assets/css/index.css')}}">

@stop

@section('content')


	 <div class="container-fluid">        
         <div class="row">
          <image src="{{asset('assets/image/index_banner_2_v6.jpg')}}" width="100%">
         </div>   
     </div>
     <div style="background: #f3f3f3;padding-bottom:30px">
     <div class="container section">
        <div class="row">
              <!-- 活動 -->
              <div class="container-fluid activity">
                  <div class="row activity-header">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <span class="activity-left">精彩活動</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <span class="activity-right">查看更多></span>
                    </div>
                  </div>
                  <div class="row activity-body">
                    <div class="lg-1 col-">
                      <div class="cat-pic-up">
                        <a href="#"><image src="{{asset('assets/image/pdd_global_haitao_v1.jpg')}}"></a>
                      </div>
                      <div class="cat-pic-up">
                        <a href="#"><image src="{{asset('assets/image/pdd_special99_v1.jpg')}}"></a>
                      </div>
                    </div>
                    <div class="lg-2">
                      <div class="cat-pic-up">
                        <a href="#"><image src="{{asset('assets/image/pdd_brand_sale_v1.jpg')}}"></a>
                      </div>
                      <div class="cat-pic-up">
                        <a href="#"><image src="{{asset('assets/image/pdd_super_spike_v1.jpg')}}"></a>
                      </div>
                    </div>
                    <div class="lg-3">
                      <div class="cat-pic-up">
                        <a href="#"><image src="{{asset('assets/image/pdd_fresh_fruit_v1.jpg')}}"></a>
                      </div>
                      <div class="cat-pic-up">
                        <a href="#"><image src="{{asset('assets/image/pdd_app_dl.png')}}"></a>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        <div class="row">
        <div class="container-fluid goods">
                <div class="row goods-header">              
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <span class="goods-left">精選專題</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <span class="goods-right"><a href="{{URL('/category')}}?cat_id1=1">更多></a></span>
                    </div>
                </div>
                <div class="row cat-list">
                    <ul>
                   
                     @if($data)
                        @foreach($data as $v)
                    
                        <li class="cat-list-item col-lg-6"><a href="{{URL('/category')}}?cat_id1={{$v->id}}">
                            <div class="container-fluid">
                              <div class="row clt-content">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img" style="background:#fff"><image src="{{$v->img}}"></div>
                                  <div class="col-lg-12 clt-goods" style="background:#fff;margin-top: 0px">
                                      <ul>
                                      
                                          @if($v->goods)
                                              @foreach($v->goods as $value)
                                      
                                        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 img">
                                          <div><image src="{{$value->hd_thumb_url}}"></div>
                                          <p class='gname'>{{$value->goods_name}}</p>
                                          <p class="price"><b>NT$</b><span>{{$value->prom_price}}</span> <span class="index-goods-mprice">NT$<span>{{$value->market_price}}</span></span></p>
                                        </li>

                                      		@endforeach
                                      	 @endif
                                      </ul>

                                  </div>
                              </div>
                            </div></a>
                        </li>  
                     
                      @endforeach
                    @endif

                    </ul>
                </div>
              </div>
     </div>
     </div>
     </div>
      
@stop

