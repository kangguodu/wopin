      <div class="container-fluid wp-header">        
         <div class="row header">
            <div class="col-lg-6 col-md-2 col-sm-2 col-xs-12 logo">
               <img src="{{asset('assets/image/logo.png')}}">
            </div>
            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-12 nav-nav">
               <!-- <nav class="navbar navbar-default"> -->
               <nav>
                  <div class="col-lg-12 col-sm-12 col-xs-12 nav-header">
                   <div id="navbar">
                     <ul class="nav navbar-nav">
                       <li class='page' page='index'><a href="{{URL('/index')}}">首頁</a></li>
                       <li class='page' page='zhaoshang'><a href="{{URL('/zhaoshang')}}">商家入駐</a></li>
                       <li class="page" id="download" page="download"><a href="{{URL('/download')}}">下載APP</a></li>
                       <li class="help page" page="help"><a href="{{URL('/help')}}">幫助中心</a></li>
                     </ul>
                   </div>
                 </div>
               </nav>
            </div>
            
         </div>   
      </div>


<script>
  var test = window.location.href;
  var str = test.split("/");  

  $('.page').each(function(){
    if($(this).attr('page') == str[str.length-1]){
      $(this).attr('class','active')
    }
  })
</script>
            