@extends('layouts.master')

@section('title')
<title>Search</title>
@endsection


@section('content')
<div class="page-container">

        <?php
        function doimau($str,$key)
        {
         return str_replace($key,"<span style='color:red'>$key</span>",$str);
        }
        ?>
        
    <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
      <div class="container">
        <div class="title-wrapper">
          <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Tìm kiếm món ăn</div>
          <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
          <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">The various dishes are waiting for your coming to enjoy its</div>
        </div>
      </div>
    </div>
    <div class="page-content-wrapper">
      <section class="product-sesction-02 padding-top-100 padding-bottom-100">
        <div class="container">
          <div class="swin-sc swin-sc-title style-3">
            <p class="title"><span>Tim kiem: {{$search_food->total()}} - {{$key}}</span></p>
          </div>
          <div class="swin-sc swin-sc-product products-02 carousel-02">
            <div class="row ">
              

            </div>

            <div id="pt">
                    @include('search.pagination')

            </div>
             

          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

 @section('script')


<script>


        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $(document).on('click','.pagination a',function(e){
            e.preventDefault();
           

            var page = $(this).attr('href').split('page=')[1]; 
           
            $.get('/ajax/search?page='+page,function(data){
              console.log(data);
              
                $("#pt").html(data);
                location.hash = page;
            });
        
          });
        
        
</script>
 
@endsection 