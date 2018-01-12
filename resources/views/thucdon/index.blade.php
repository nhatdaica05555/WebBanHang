@extends('layouts.master')

@section('title')
<title>Thuc-Don</title>
@endsection

@section('content')
  
   
  </style>
<div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
          <div class="container">
            <div class="title-wrapper">
              <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Thực đơn</div>
              <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
              <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">The various dishes are waiting for your coming to enjoy its</div>
            </div>
          </div>
        </div>
        <div class="page-content-wrapper">
          <section class="product-sesction-menu padding-bottom-100 padding-top-100">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="swin-sc swin-sc-title style-3">
                    <p class="title"><span>Breakfast Time</span></p>
                  </div>
                  <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                    
                    <div class="row">
                      <div class="nav-slider">

                        <div class="tab-content">
                          <div class="col-md-5 col-sm-12">
                            <div class="cat-wrapper">
                              <div class="item"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive img-full"></div>
                            </div>
                          </div>
                          <div class="col-md-7 col-sm-12">
                            <div class="products">


                                @foreach ($menu as $mn)
                                <div class="item product-01">
                                        <div class="item-left">
                                          <h5 class="title">{{$mn->name}}</h5>
                                          <div class="des">{{$mn->detail}}</div>
                                        </div>
                                        <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                      </div>
                                @endforeach

                             
                             
                            </div>
                          </div>
                        </div>
                        <div class="tab-content">
                          <div class="col-md-5 col-sm-12">
                            <div class="cat-wrapper">
                              <div class="item"><img src="assets/images/product/pd-cat-lunch.png" alt="" class="img img-responsive img-full"></div>
                            </div>
                          </div>
                        </div>
                      
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="menu-grid-02 padding-bottom-100">
            <div class="container">
              <div class="swin-sc swin-sc-product products-01 style-03 woocommerce">
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="products nav-slider">
                  
                      <div id="pt">

                        @include('thucdon.pagination',$food)

                      </div>
                     



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="menu-banner-section banner-section padding-top-100 padding-bottom-100"><img src="assets/images/background/lemon.png" alt="" class="img-left img-bg img-deco img-responsive"><img src="assets/images/background/vegetable_03.png" alt="" class="img-right img-bg img-deco img-responsive">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="content-wrapper">
                    <h2 class="heading-title">Let's Make Your Meal be Fantastic With<span class="text-large"> FOODAY</span>Awesome Menu!</h2>
                    <div class="swin-btn-wrap"><a href="#" class="swin-btn"><span>Book Table</span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
        </div>
      </div>
      <script>

        
      </script>

  
@endsection

@section('script')

<script>


  $(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1]; 
     
    $.get('/ajax/products?page='+page,function(data){
      console.log(data);
      
        $("#pt").html(data);
        location.hash = page;
    });

  });


    $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
    });
    
    $(document).ready(function(){

      $(document).on('click','#checkout',function(e){
        e.preventDefault();
       var id = $(this).data('id');
        $.post('{{route('cart')}}',{idItem:id},function(data,status){
          console.log(data);
          swal("Đã thêm thành công!");
          $('#qty').html(data.total);
        });
      });
    
    });

  </script>
@endsection