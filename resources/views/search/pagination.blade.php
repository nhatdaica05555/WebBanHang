
     


        <div class="products nav-slider margin-top-50">
                <div class="row slick-padding">
                
                  @foreach ($search_food as $sf)
                  <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="blog-item item swin-transition">
                            <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                              <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>5.0</span></div>
                              <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                            </div>
                            <div class="block-content">
                              <h5 class="title"><a href="javascript:void(0)">{{-- {!! doimau($sf->name,$key) !!} --}}</a></h5>
                              <div class="product-info">
                                      {{-- {!! doimau($sf->detail,$key) !!} --}}
                              </div>
                            </div>
                          </div>
                        </div>
                  @endforeach
  
                 
                
                 
                </div>
              </div>
              <div style='text-align:center'>
                      {{$search_food->links()}}
              </div>