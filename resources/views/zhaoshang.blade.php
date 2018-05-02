@extends('layouts.app')

@section('title','我拼-招商')

@section('css')

<link rel="stylesheet" href="{{asset('assets/css/zhaoshang.css')}}">

@stop

@section('content')

    <article id="indexNew" class="container-fluid">
           <nav class="index-navigation row"> 
              <ul class="clearfix navigation2"> 
                  <li class="active">招商首頁</li> 
                  <!-- <li>常見問題</li>  -->
                  <span class="join-us-tag"><a href="http://office.techrare.com:5681/wopinService/#/login" target="_blank">免費入駐</a></span> 
              </ul> 
            </nav>
            <div class="row">
              <section class="imageShow col-md-12 col-sm-12 col-xs-12">
                  <div class="index-banner"> <img class="modelImage1" src="{{asset('assets/image/ruzhu.png')}}"></div>
              </section>
          </div>

          <section class="mobile-flow">
                <div class="mobile-flow-title">
                    <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/c270f07647293843f7590e3596f63f3f.png" alt="pinduoduo">
                    <label>入駐流程</label>
                </div>
                <div class="process">
                    <div class="item">
                        <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/12b9750bccecee3660fd24607fed84df.png" alt="pinduoduo">
                        <p>手機驗證</p>
                        <p>(約10秒鐘)</p>
                    </div>
                    <div class="icon">
                        <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/e5d34a2072ab8d4444df09eca2a51701.png" alt="pinduoduo">
                    </div>
                    <div class="item">
                        <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/b6e9083e5c0fd55dfdd4d032d4abb9ce.png" alt="pinduoduo">
                        <p>填寫信息</p>
                        <p>(約5分鐘)</p>
                    </div>
                    <div class="icon">
                        <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/e5d34a2072ab8d4444df09eca2a51701.png" alt="pinduoduo">
                    </div>
                    <div class="item">
                        <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/e28469a216cd4d66a38cc9a3607e968f.png" alt="pinduoduo">
                        <p>開店成功</p>
                        <p></p>
                    </div>
                    
                    
                </div>
          </section>



            <section class="reasonForPdd"> 
                <div class="titlePart container">

                    <p class="row"><img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/788d09675f74e7afb2eb80457c7a5a4b.png" class="col-lg-2 col-lg-offset-2 img"> 
                    &emsp;<span class="titleDoc col-lg-4 col-md-12 col-sm-12 col-xs-12">選擇拼多多，無法抗拒的理由</span>&emsp;
                    <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/0f9de6315fd68ddf9a3b69dbe8a19deb.png" class="col-lg-2 img"> </p>
                    <p class="introductionDoc">擁有3億活躍用戶，眾多新穎的活動，拼多多值得妳加入</p> 
                </div> 
                <div class="container">
                  <ul class="clearfix row"> <!--v-for-start-->
                      <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                          <div>
                            <img src="//imsproductionimg.yangkeduo.com/2fc22ed8fa6c678d7c2e60af452d95ce.png"> 
                            <p class="first">3億活躍用戶</p> 
                            <p class="second">龐大用戶群，銷量猛增長</p> 
                          </div>
                      </li>
                      <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-md-6 col-sm-6 col-xs-6"> 
                          <div>
                            <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/7bcfc5628aeb89f0620522d32fa66b49.png"> 
                            <p class="first">超高平臺知名度</p> 
                            <p class="second">綜藝強冠名，資源超豐富</p> 
                          </div>
                      </li>
                      <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6"> 
                          <div>
                            <img src="//imsproduction.oss-cn-shanghai.aliyuncs.com/236e6f819550d4920104e8e7497741e1.png"> 
                            <p class="first">新電商開創者</p> 
                            <p class="second">拼單齊分享，賣貨忙不停</p> 
                          </div>
                        </li>
                      <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6"> 
                          <div>
                            <img src="//imsproductionimg.yangkeduo.com/8914ba01deaa3842fc82fc3c637e2d84.png"> 
                            <p class="first">免費開店，0傭金、無扣點</p> 
                            <p class="second">開店無壓力，收入超勁爆</p> 
                          </div>
                      </li>
                      <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6"> 
                          <div>
                            <img src="//imsproductionimg.yangkeduo.com/c77ffbdaf7bd0f5bd535c302859a40ca.png"> 
                            <p class="first">新商家扶持</p> 
                            <p class="second">扶持力度大，流量強提升</p> 
                          </div>
                      </li>
                      <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6"> 
                          <div>
                            <img src="//imsproductionimg.yangkeduo.com/0be10dc92735a43ab74feba5377a188b.png"> 
                            <p class="first">海量活動每天報名</p> 
                            <p class="second">驚喜活動多，用戶忙剁手</p> 
                          </div>
                      </li><!--v-for-end--> 
                    </ul> 
                  </div>
                  <div class="reasonBtn">
                  <img id="reasonBtn" style="cursor: pointer;" src="http://imsproduction.oss-cn-shanghai.aliyuncs.com/b7b9b7d1e5c26b9ae9a7d397e5b28dbb.png" onclick='window.location.href="http://office.techrare.com:5681/wopinService/#/login";''> 
                  </div>
            </section>
       </article>

@stop