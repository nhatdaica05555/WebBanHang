<div class="item-slick">
    <div class="row">

    @foreach($food as $foo)
      <div class="col-md-2 col-sm-4 col-xs-12">
        <div class="item product-01">
          <div class="block-img"><img src="assets/images/hinh_mon_an/{{$foo->image}}" alt="" style ="height: 80px;width: 120px;">
            <div   class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a  href="" data-id="{{$foo->id}}" id="checkout" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
          </div>
          <h5 class="title">{{$foo->name}}</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
        </div>
      </div>
    @endforeach
 
   <div style='text-align: center;padding-top:200px;'>{{$food->links()}}</div>

     
    </div>
    <div class="row">
            
      
    </div>
</div>