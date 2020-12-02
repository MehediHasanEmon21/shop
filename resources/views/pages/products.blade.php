@extends('layouts.app')
@section('title','Shop')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_responsive.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" />



@php

$route = Route::current()->getName();

@endphp

<div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">
            {{ ($route == 'all.products') ? 'All Products' :  'Smartphones &amp; Tablets' }}
            

           </h2>
        </div>
</div>


<div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <!-- Shop Sidebar -->
                    <div class="shop_sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">Categories</div>
                            <ul class="sidebar_categories">
                                @foreach($categories as $category)
                                <li><a onclick="fetchCategoryProduct({{$category->id}})" style="cursor: pointer;">{{$category->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar_section filter_by_section">
                            <div class="sidebar_title">Filter By</div>
                            <div class="sidebar_subtitle">Price</div>
                            <input type="hidden" id="hidden_minimum_price" value="{{intval($min_price)}}" />
                            <input type="hidden" id="hidden_maximum_price" value="{{intval($max_price)}}" />
                            <p id="price_show">{{intval($min_price)}} $ - {{intval($max_price)}} $</p>
                            <div id="price_range"></div>
                        </div>
                      
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle brands_subtitle">Brands</div>
                            <ul class="brands_list">
                                @foreach($brands as $brand)
                                <li class="brand"><a onclick="fetchSubCategoryProduct({{$brand->id}})" style="cursor: pointer;">{{$brand->brand_name}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-9 ajax_products">
                    
                    <!-- Shop Content -->

                    <div class="shop_content">
                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span>{{ count($products) }}</span> products found</div>
                          
                        </div>



                      
                        <div class="product_grid" style="position: relative; height: 1010.67px;">

                            <div class="product_grid_border"></div>

                            <!-- Product Item -->

                            <div id="product_items">
                            @foreach($products as $pro)
                            <div class="product_item is_new" style="position: absolute; left: 0px; top: 0px;">
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

                        <div class="shop_page_nav d-flex flex-row" style="text-align: center;">
                           {{ $products->links()  }}
                        </div>

                        

                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Recently Viewed</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">
                        
                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider owl-loaded owl-drag">
                            
                            <!-- Recently Viewed Item -->
                            

                            <!-- Recently Viewed Item -->
                            

                            <!-- Recently Viewed Item -->
                            

                            <!-- Recently Viewed Item -->
                            

                            <!-- Recently Viewed Item -->
                            

                            <!-- Recently Viewed Item -->
                            
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1560px, 0px, 0px); transition: all 0s ease 0s; width: 3510px;"><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225</div>
                                        <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$375</div>
                                        <div class="viewed_name"><a href="#">Speedlink...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225</div>
                                        <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$375</div>
                                        <div class="viewed_name"><a href="#">Speedlink...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned active" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned active" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225</div>
                                        <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$375</div>
                                        <div class="viewed_name"><a href="#">Speedlink...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots disabled"></div></div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">
                        
                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">
                            
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div></div>

                        </div>
                        
                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    
<script>
    
    function fetchCategoryProduct(id){

      

        $.ajax({
            url: '/fetch/category/product',
            method: "GET",
            data: {
                id: id,
            },
            success: function(data){

               

                $('.ajax_products').html(data)

            }


        })

    }

       function fetchSubCategoryProduct(id){



        $.ajax({
            url: '/fetch/subcategory/product',
            method: "GET",
            data: {
                id: id,
            },
            success: function(data){

               

                $('.ajax_products').html(data)

            }


        })

    }

    



</script>

<script>
    
    $(function(){

          var min_price = parseInt($('#hidden_minimum_price').val());
            var max_price = parseInt($('#hidden_maximum_price').val());
            
            $('#price_range').slider({
              range:true,
              min:min_price,
              max:max_price,
              values:[min_price, max_price],
              step:10,
              stop:function(event, ui)
              {   console.log(ui)
                  $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                  $('#hidden_minimum_price').val(ui.values[0]);
                  $('#hidden_maximum_price').val(ui.values[1]);
                  filter_data()
                  
              }
          });


          function filter_data() {
                
                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();
                $.ajax({
                    url: "/price/filter/product",
                    method: "GET",
                    data: {
                        minimum_price: minimum_price,
                        maximum_price: maximum_price,
                        
                    },
                    success: function(data) {
                      $('.ajax_products').html(data)
                    }
                });
            }


    })



          

</script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
@endsection
