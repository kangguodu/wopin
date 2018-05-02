@extends('layouts.app')

@section('title','我拼-分類')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/category.css')}}">
@stop

@section('content')
  
  <div class="container-fluid">        
         <div class="row">
              <div class="wp-cat-nav">
                <div class="wp-cat-nav-items lg category">
                  @if($category)
                    @foreach($category as $v)
              
              <div class="wp-cat-nav-item" cat_id="{{$v->id}}"><a href="{{URL('/category')}}?cat_id1={{$v->id}}">{{$v->cat_name}}</a></div>

                    @endforeach

                  @endif
                  
                </div>
                <div class="wp-cat-nav-items sm md category">
                  <div class="wp-cat-nav-item hide_cat all" style="color:#fff;">全部分類</div>
                  
                  <img src="//mcdn.pinduoduo.com/assets/img/mpdd_cat_arrow.png" class="arrow">
                </div>
                
                
             </div>
         </div>   
      </div>
      <div class="container-fluid cat hide_cat">        
         <div class="row">
              <div class="wp-cat-nav1">
            <div class="wp-cat-nav-items sm list">
                  @if($category)
                    @foreach($category as $v)
              
              <div class="wp-cat-nav-item wp-cat_index" cat_id="{{$v->id}}"><a href="{{URL('/category')}}?cat_id1={{$v->id}}">{{$v->cat_name}}</a></div>

                    @endforeach

                  @endif
                  
                </div>
              </div>
           </div>
       </div>

      <div id="category">
      <div class="container-fluid section">
          <div class="row">
              <div class="wp-cat-subject-wrapper cat_wrap">
                  <div class="wp-cat-subject row">
                      <div class="wp-subject-img col-lg-6 col-md-12 col-sm-12 col-xs-12">
                          <img alt="global" src="{{$cat->img}}" id="cat_img">
                      </div>
                      <div class="wp-subject-txt col-lg-6 col-md-12 col-sm-12 col-xs-12">
                          <p class="wp-subject-txt-title" ms-text="category.title">{{$cat->cat_name}}</p>
                          <p class="wp-subject-txt-detail" ms-text="category.detail">{{$cat->cat_desc}}</p>
                          <div class="wp-subject-extra col-lg-2 col-md-3 col-sm-3 col-xs-3">
                              <div class="wp-subject-extra-img" style="background-position: -100% 0%;"></div>
                              <div class="wp-subject-extra-text">全場包郵</div>
                          </div>
                          <div class="wp-subject-extra col-lg-2 col-md-3 col-sm-3 col-xs-3">
                              <div class="wp-subject-extra-img" style="background-position: -100% -200%;"></div>
                              <div class="wp-subject-extra-text">7天退換</div>
                          </div><div class="wp-subject-extra col-lg-2 col-md-3 col-sm-3 col-xs-3">
                              <div class="wp-subject-extra-img" style="background-position: 0% -200%;"></div>
                              <div class="wp-subject-extra-text">假壹賠十</div>
                          </div><div class="wp-subject-extra col-lg-2 col-md-3 col-sm-3 col-xs-3">
                              <div class="wp-subject-extra-img" style="background-position: -100% -100%;"></div>
                              <div class="wp-subject-extra-text">海關監督</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid goods">
          <div class="row">
            <div class="container">
              <div class="row">
                <div id="wp-list" class="cat-goods-list">
                    <div class="wp-act-glist" avalonctrl="wp-list" style="visibility: visible;">
                    
                       
          @if($goods)

            @foreach($goods as $v)

            <div class="pa-glist-item col-lg-3 col-md-6 col-sm-6 col-xs-6" onmouseover="over($(this).index())" onmouseout='out($(this).index())' ontouchstart="download($(this).index())">
                  <div class="pa-glist-item-goods">
                      <div class="act-goods-img">
                          <img class="pa-goods-img" alt="goods" src="{{$v->hd_thumb_url}}">
                          <img class="pa-buy-code hide_1" alt="code" src="//cdn.pinduoduo.com/assets/img/organic_sweep_v1.png">
                      </div>
                      <div class="act-goods-txt">
                          <p class="act-goods-name">{{$v->goods_name}}</p>
                          <div class="act-goods-prices">
                              <span class="act-goods-price"><b>NT$</b><span>{{$v->prom_price}}</span></span>
                              <span class="act-goods-mprice">NT$<span>{{$v->market_price}}</span></span>
                              <span class="act-goods-cnt">已團<span>{{$v->sold_quantity}}</span>件</span>
                          </div>
                      </div>
                  </div>
              </div>

               @endforeach

          @endif

              <div class="pa-glist-item col-lg-3 download_app">
                  <img src="//cdn.pinduoduo.com/assets/img/act_app_download.jpg" style="margin-top:25px;height:378px;">
              </div>





                    </div>
                 </div>
              </div>
            </div>

          </div>
      </div>
     </div>

@stop

@section('script')
<script type="text/javascript">
    var test = window.location.search;
    var str = test.split("=");  
  $('.wp-cat-nav-item').each(function(){
    if($(this).attr('cat_id') == str[1]){
      $(this).attr('id','active')
      $(this).children().attr('id','select')
    }
  })

  function over(index){
    $($('.pa-buy-code')[index]).removeClass('hide_1')
  }
  function out(index){
    $($('.pa-buy-code')[index]).addClass('hide_1')
  }
  function download(index){
    window.location.href="http://office.techrare.com:5681/download/";
  }

  $('body').click(function(e) {
    var target = $(e.target);
    if(target.is('.arrow')){
      if($('.lg').hasClass('hide_cat')){
        $('.arrow').removeClass('nav-all-sub')
        $('.lg').removeClass('hide_cat')
        $('.all').addClass('hide_cat')
        $('.cat').addClass('hide_cat')

      }else{
        $('.arrow').addClass('nav-all-sub')
        $('.lg').addClass('hide_cat')
        $('.all').removeClass('hide_cat')
        $('.cat').removeClass('hide_cat')
      }  

    }else if(!target.is('.cat')){
      if($('.lg').hasClass('hide_cat')){
          $('.arrow').removeClass('nav-all-sub')
          $('.lg').removeClass('hide_cat')
          $('.all').addClass('hide_cat')
          $('.cat').addClass('hide_cat')
        }
    }

});
</script>
@stop