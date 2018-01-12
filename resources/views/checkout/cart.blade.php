   
                    <table class="table table-striped" style="text-align: center;">
                            <thead>
                              <tr>
                                <th width="30%" style="text-align: center;">Product</th>
                                <th width="20%" style="text-align: center;">Price</th>
                                <th width="20%" style="text-align: center;">Qty.</th>
                                <th width="20%" style="text-align: center;">Total</th>
                                <th width="10%" style="text-align: center;">Remove</th>
                         
                              </tr>
                            </thead>
                            @foreach(Cart::content() as $it)
                            <tbody>
                              <tr>
                                <td>
                                  <img src="assets/images/hinh_mon_an/{{$it->options->image}}" width="250px" alt="this is an image">
                                  <p><br><b>{{$it->name}}</b></p>
                                </td>
                                <td class="price {{$it->id}}">{{$it->price}}</td>
                                <td>
                                
                                  <input class="qty" id="{{$it->id}}" value="{{$it->qty}}">
                                 
                           
                                </td>
                                <td class="total {{$it->id}}">{{($it->price*$it->qty)}}</td>
                                <td><a id = "{{$it->id}}" href="" class="remove" title="Remove this item"><i class="fa fa-trash-o fa-2x"></i></a></td>
                              </tr>
                         
                                
                             
                            </tbody>
                            @endforeach
                         
                        </table>     
                       