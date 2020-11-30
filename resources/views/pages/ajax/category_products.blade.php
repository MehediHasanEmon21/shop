<div class="shop_content">
                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span>{{ count($products) }}</span> products found</div>
                          
                        </div>



                      
                        <div class="product_grid" style="position: relative; height: 1010.67px;">

                            <div class="product_grid_border"></div>

                            <!-- Product Item -->

                            <div id="product_items">
                            @foreach($products as $pro)
                            <div class="product_item is_new" style="float: left;">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($pro->image_one) }}" alt="" style="height: 100px; width: 100px;"></div>
                                <div class="product_content"> 
                                    @if($pro->discount_price == NULL)
                                        <br><span class="text-danger"><b> ${{ $pro->selling_price }} </b></span>
                                    @else
                                     <div class="product_price discount">${{ $pro->discount_price }}<span>${{ $pro->selling_price }}</span></div>
                                    @endif
                                    <div class="product_name"><div><a href="#" tabindex="0">{{ $pro->product_name }}</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    @if($pro->discount_price == NULL)
                                             <li class="product_mark product_new" style="background: blue;">New</li>
                                             @else
                                            @php
                                            $amount=$pro->selling_price - $pro->discount_price;
                                            $discount=$amount/$pro->selling_price * 100;
                                            @endphp
                                             <li class="product_mark product_new" style="background: red;">

                                           {{ intval($discount) }}%
                                            </li>
                                    @endif
                                </ul>
                            </div>
                            @endforeach
                            </div>




                        </div>

                        <!-- Shop Page Navigation -->

                       

                        

                    </div>