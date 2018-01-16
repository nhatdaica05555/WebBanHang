<header class="header-transparent">
    <div class="header-top top-layout-02">
      <div class="container">
        <div class="topbar-left">
          <div class="topbar-content">
            <div class="item"> 
              <div class="wg-contact"><i class="fa fa-map-marker"></i><span>90-92 Lê Thị Riêng, Bến Thành, Quận 1</span></div>
            </div>
            <div class="item"> 
              <div class="wg-contact"><i class="fa fa-phone"></i><span>0163 296 7751</span></div>
            </div>
            <div class="item"> 
            <form method="POST" action="search">
              {{csrf_field()}}
                <div class="item"> 
                    <input name="key" type="text" value="" class="form-control" style="
                    height: fit-content;color: white;">
                </div>
                <div class="item"> 
                    <button type="submit" class="btn btn-default">Search</button>
                </div>

            </form>
          </div>
            
          </div>
        </div>
        <div class="topbar-right">
          <div class="topbar-content">
            <div class="item">
              <ul class="socials-nb list-inline wg-social">
  
                <li  id="qty"><a><i>{{Cart::count()}}</i></a></li>
              </ul>
            </div>
            <div class="item">
              <div class="wg-social"><a href="{{route('checkout')}}"><i class="fa fa-shopping-cart fa-2x"></i><span>Shopping Cart</span></a></div>
              
            </div>
            {{--  neu chua dang nhap thi hien Login-register  --}}
            @if (!Auth::check())
             <div class="item">

                <div class="wg-social"><a href="{{route('getLogin')}}"><i class="fa fa-sign-in"></i><span>Login - Register</span></a></div>
                
              </div>
              @else

              <div class="item">

                  <div class="wg-social"><a href="{{route('getLogin')}}">
                    {{--  check gioi tinh  --}}
                    {{--  neu la gender = nam thi icon nam va nguoc lai  --}}
                    @if (Auth::user()->gender == 'Nam')
                      <i class="fa fa-male"></i><span>{{Auth::user()->username}}</span></a></div>
                    @else
                    <i class="fa fa-female"></i><span>{{Auth::user()->username}}</span></a></div>
                    @endif
                </div>
                <div class="item">

                    <div class="wg-social"><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i><span>Logout</span></span></a></div>
                    
                  </div>

            @endif
            

            {{--  neu da dang nhap thi hien username - logout  --}}
          </div>
        </div>
      </div>
    </div>
    <div class="header-main">
      <div class="container">
        <div class="open-offcanvas">&#9776;</div>
        
        <div class="header-logo"><a href="home" class="logo logo-static"><img src="assets/images/logo-white.png" alt="fooday" class="logo-img"></a><a href="index.html" class="logo logo-fixed"><img src="assets/images/logo.png" alt="fooday" class="logo-img"></a></div>
        <script src="assets/vendors/jquery-1.10.2.min.js"></script>
        <script>
        $(function() {
          var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
          if (pgurl=="") pgurl="." ;
           $("#main-nav li").each(function(){
            if($('a', this).attr("href") == pgurl || $(this).children("a").attr("href") == '' )
            $(this).addClass("current-menu-item");
     
           })
        });
        </script>
        <nav id="main-nav-offcanvas" class="main-nav-wrapper">
          <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
          <div class="main-nav">
            <ul id="main-nav" class="nav nav-pills">
              <li><a class="current-menu-item" href="home">Home</a></li>
              <li><a href="{{route('thucdon')}}">Thực đơn</a></li>
            
              <li><a href="tim-kiem.html">Tìm kiếm</a></li>
              <li><a href="about">Giới thiệu</a></li>
              <li><a href="contact">Liên hệ</a></li>
            
            
             
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>