@extends('layouts.app')

@section('title','Home')




{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --}}


@section('content')
<!-- Characteristics -->
    
    @include('layouts.include.banner')

    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="/frontend/images/char_1.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="/frontend/images/char_2.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="/frontend/images/char_3.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="/frontend/images/char_4.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    
                    <!-- Deals -->

                    <div class="deals">
                        <div class="deals_title">Deals of the Week</div>
                        <div class="deals_slider_container">
                            
                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">
                                
                                @foreach($hot_deals as $hot_deal)
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><a href="{{ route('product.details',$hot_deal->slug) }}"><img src="{{URL::to($hot_deal->image_one)}}" style="width: 310px; height: 310px;" alt=""></a></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">{{$hot_deal->category_name}}</a></div>
                                                <div class="deals_item_price_a ml-auto">${{$hot_deal->selling_price}}</div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name"><a href="{{ route('product.details',$hot_deal->slug) }}">{{$hot_deal->product_name}}</a></div>
                                                <div class="deals_item_price ml-auto">${{$hot_deal->discount_price}}</div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Available: <span>{{$hot_deal->product_quantity}}</span></div>
                                                    {{-- <div class="sold_title ml-auto">Already sold: <span>28</span></div> --}}
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                          {{--   <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Hurry Up</div>
                                                    <div class="deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                            <span>hours</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                            <span>mins</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                @endforeach


                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                        </div>
                    </div>
                    
                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix">
                                    <li class="active">Featured</li>
                                    <li>Trend</li>
                                    <li>Best Rated</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <!-- Product Panel -->
                            <div class="product_panel panel active">

                                <div class="featured_slider slider">
                                    
                                    @foreach($feature_products as $feature_product)
                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <a href="{{ route('product.details',$feature_product->slug) }}"><img src="{{URL::to($feature_product->image_one)}}" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                
                                                @if(isset($feature_product->discount_price))
                                                <div class="product_price discount">${{$feature_product->discount_price}}<span>${{$feature_product->selling_price}}</span></div>
                                                @else
                                                <div class="product_price discount"><span>${{$feature_product->selling_price}}</span></div>
                                                @endif

                                                
                                                <div class="product_name"><div><a href="{{ route('product.details',$feature_product->slug) }}">{{$feature_product->product_name}}</a></div></div>
                                                {{-- <div class="product_extras addCart" data-id="{{$feature_product->id}}">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div> --}}

                                                <div class="product_extras">

                                                    <button id="{{ $feature_product->id }}" class="product_cart_button" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                 
                                                </div>

                                            </div>
                                            @if(isset($feature_product->favourite))

                                                <div class="product_fav active" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                                    <i class="fas fa-heart"></i>
                                                </div>

                                            @else
                                                <div class="product_fav" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                            @endif
                                            
                                            <ul class="product_marks">
                                                @if($feature_product->discount_price == NULL)
                                                    <li class="product_mark product_discount" style="background: green;">new</li>

                                                    
                                                @else
                                                    <li class="product_mark product_discount">-{{intval($feature_product->percent)}}%</li>
                                                @endif
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>

                                    @endforeach


                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                            <!-- Product Panel -->

                            <div class="product_panel panel">
                                <div class="featured_slider slider">
                                    
                                    @foreach($trend_products as $tp)
                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{ route('product.details',$tp->slug) }}"><img src="{{URL::to($tp->image_one)}}" alt=""></a></div>
                                            <div class="product_content">
                                                @if(isset($tp->discount_price))
                                                <div class="product_price discount">${{$tp->discount_price}}<span>${{$tp->selling_price}}</span></div>
                                                @else
                                                <div class="product_price discount"><span>${{$tp->selling_price}}</span></div>
                                                @endif
                                                <div class="product_name"><div><a href="{{ route('product.details',$tp->slug) }}">{{$tp->product_name}}</a></div></div>
                                                <div class="product_extras">
                                                  
                                                    <button id="{{ $tp->id }}" class="product_cart_button" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                </div>
                                            </div>
                                            @if(isset($tp->favourite))

                                                <div class="product_fav active" data-id="{{ $tp->id }}" data-auth-id="{{ Auth::id() }}">
                                                    <i class="fas fa-heart"></i>
                                                </div>

                                            @else
                                                <div class="product_fav" data-id="{{ $tp->id }}" data-auth-id="{{ Auth::id() }}">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                            @endif
                                            <ul class="product_marks">
                                                 @if($tp->discount_price == NULL)
                                                    <li class="product_mark product_discount" style="background: green;">new</li>

                                                    
                                                @else
                                                    <li class="product_mark product_discount">-{{intval($tp->percent)}}%</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach




                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                            <!-- Product Panel -->

                            <div class="product_panel panel">
                                <div class="featured_slider slider">

                                    <!-- Slider Item -->
                                    @foreach($best_products as $bp)
                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{ route('product.details',$bp->slug) }}"><img src="{{URL::to($bp->image_one)}}" alt=""></a></div>
                                            <div class="product_content">
                                                @if(isset($bp->discount_price))
                                                <div class="product_price discount">${{$bp->discount_price}}<span>${{$bp->selling_price}}</span></div>
                                                @else
                                                <div class="product_price discount"><span>${{$bp->selling_price}}</span></div>
                                                @endif
                                                <div class="product_name"><div><a href="{{ route('product.details',$bp->slug) }}">{{$bp->product_name}}</a></div></div>
                                                <div class="product_extras">
                                                  
                                                    <button class="product_cart_button" id="{{ $bp->id }}" class="product_cart_button" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                </div>
                                            </div>
                                             @if(isset($bp->favourite))

                                                <div class="product_fav active" data-id="{{ $bp->id }}" data-auth-id="{{ Auth::id() }}">
                                                    <i class="fas fa-heart"></i>
                                                </div>

                                            @else
                                                <div class="product_fav" data-id="{{ $bp->id }}" data-auth-id="{{ Auth::id() }}">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                            @endif
                                            <ul class="product_marks">
                                                 @if($bp->discount_price == NULL)
                                                    <li class="product_mark product_discount" style="background: green;">new</li>

                                                    
                                                @else
                                                    <li class="product_mark product_discount">-{{intval($bp->percent)}}%</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach

                   

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->

    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Popular Categories</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                        <div class="popular_categories_link"><a href="#">full catalog</a></div>
                    </div>
                </div>
                
                <!-- Popular Categories Slider -->

                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">


                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_1.png" alt=""></div>
                                    <div class="popular_category_text">Smartphones & Tablets</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_2.png" alt=""></div>
                                    <div class="popular_category_text">Computers & Laptops</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_3.png" alt=""></div>
                                    <div class="popular_category_text">Gadgets</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_4.png" alt=""></div>
                                    <div class="popular_category_text">Video Games & Consoles</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_5.png" alt=""></div>
                                    <div class="popular_category_text">Accessories</div>
                                </div>
                            </div>

                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->

    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url(/frontend/images/banner_2_background.jpg)"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->

            <div class="owl-carousel owl-theme banner_2_slider">

                @foreach($mid_sliders as $mid_slider)
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">{{$mid_slider->brand_name}}</div>
                                        <div class="banner_2_title">{{$mid_slider->product_name}}</div>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                        
                                        <div class="button banner_2_button"><a href="{{ route('product.details',$mid_slider->slug) }}">Explore</a></div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><a href="{{ route('product.details',$mid_slider->slug) }}"><img src="{{URL::to($mid_slider->image_one)}}" style="width: 514px; height: 400px" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Hot New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Hot New Arrivals</div>
                            <ul class="clearfix">
                                @foreach($categories as $key => $category)
                                <li {{ $key == 0 ? 'active': ''}}>{{ $category->category_name}}</li>
                                @endforeach
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9" style="z-index:1;">

                                

                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">

                                    @foreach($categories as $key => $category)
                                        
                                        @if($key == 0)
                                            @foreach($category->products as $pro)
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{ route('product.details',$pro->slug) }}"><img src="{{URL::to($pro->image_one)}}" alt=""></a></div>
                                                    <div class="product_content">
                                                        <div class="product_price">${{$pro->selling_price}}</div>
                                                        <div class="product_name"><div><a href="{{ route('product.details',$pro->slug) }}">{{$pro->product_name}}</a></div></div>
                                                        <div class="product_extras">
                                                            
                                                            <button class="product_cart_button" id="{{ $pro->id }}" class="product_cart_button" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    @if(isset($pro->favourite))

                                                        <div class="product_fav active" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                                            <i class="fas fa-heart"></i>
                                                        </div>

                                                    @else
                                                        <div class="product_fav" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                                            <i class="fas fa-heart"></i>
                                                        </div>
                                                    @endif
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                        @else
                                            break
                                        @endif
                                    @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>
                                

                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">

                                        @foreach($categories as $key => $category)

                                        @if($key == 1)
                                            @foreach($category->products as $pro)
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{ route('product.details',$pro->slug) }}"><img src="{{URL::to($pro->image_one)}}" style="width: 115px; height: 81px;" alt=""></a></div>
                                                    <div class="product_content">
                                                        <div class="product_price">${{$pro->selling_price}}</div>
                                                        <div class="product_name"><div><a href="{{ route('product.details',$pro->slug) }}">{{$pro->product_name}}</a></div></div>
                                                        <div class="product_extras">
                                                            <button class="product_cart_button" id="{{ $pro->id }}" class="product_cart_button" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    @if(isset($pro->favourite))

                                                        <div class="product_fav active" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                                            <i class="fas fa-heart"></i>
                                                        </div>

                                                    @else
                                                        <div class="product_fav" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                                            <i class="fas fa-heart"></i>
                                                        </div>
                                                    @endif
                                                    
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                        @else
                                            break
                                        @endif

                                        @endforeach

                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">

                                         @foreach($categories as $key => $category)

                                        @if($key == 2)
                                            @foreach($category->products as $pro)
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{ route('product.details',$pro->slug) }}"><img src="{{URL::to($pro->image_one)}}" alt=""></a></div>
                                                    <div class="product_content">
                                                        <div class="product_price">${{$pro->selling_price}}</div>
                                                        <div class="product_name"><div><a href="{{ route('product.details',$pro->slug) }}">{{$pro->product_name}}</a></div></div>
                                                        <div class="product_extras">
                                                           
                                                            <button class="product_cart_button" id="{{ $pro->id }}" class="product_cart_button" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    @if(isset($pro->favourite))

                                                        <div class="product_fav active" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                                            <i class="fas fa-heart"></i>
                                                        </div>

                                                    @else
                                                        <div class="product_fav" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                                            <i class="fas fa-heart"></i>
                                                        </div>
                                                    @endif
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                        @else
                                            break
                                        @endif

                                        @endforeach


                                        
                              
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                            </div>

                            <div class="col-lg-3">
                                <div class="arrivals_single clearfix">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div class="arrivals_single_image"><img style="width: 212px; height: 200px;" src="{{URL::to($pro->image_one)}}" alt=""></div>
                                        <div class="arrivals_single_content">
                                            <div class="arrivals_single_category"><a href="{{ route('product.details',$best_product->slug) }}"></a></div>
                                            <div class="arrivals_single_name_container clearfix">
                                                <div class="arrivals_single_name"><a href="{{ route('product.details',$best_product->slug) }}">{{$best_product->product_name}}</a></div>
                                                <div class="arrivals_single_price text-right">${{$best_product->selling_price}}</div>
                                            </div>
                                            
                                            <form action="#"><button class="arrivals_single_button" type="button" id="{{ $pro->id }}" class="product_cart_button" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button></form>
                                        </div>
                                        {{-- <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div> --}}
                                        <ul class="arrivals_single_marks product_marks">
                                            <li class="arrivals_single_mark product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                                
                    </div>
                </div>
            </div>
        </div>      
    </div>

    <!-- Best Sellers -->


    <!-- Adverts -->

  

    <!-- Trends -->

    <div class="trends">
        <div class="trends_background" style="background-image:url(/frontend/images/trends_background.jpg)"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Buy one Getone</h2>
                        <div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">

                            @foreach($buyone_getone as $bg)
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><a href="{{ route('product.details',$bg->slug) }}"><img src="{{ URL::to($bg->image_one)}}" style="width: 212px; height: 132px;" alt=""></a></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">{{$bg->category_name}}</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="{{ route('product.details',$bg->slug) }}"> {{substr($bg->product_name,0,15)}}...</a></div>
                                            <div class="trends_price">${{$bg->selling_price}}</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    @if(isset($bg->favourite))

                                    <div class="trends_fav active" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                @else
                                    <div class="trends_fav" data-id="{{ $feature_product->id }}" data-auth-id="{{ Auth::id() }}">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                @endif
                                   
                                </div>
                            </div>
                            @endforeach

                            
                  

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

   

    

  

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">
                        
                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">
                            
                            @foreach($brands as $brand)
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ URL::to($brand->brand_logo)}}" style="width: 100px; height: 30px;" alt=""></div></div>
                            @endforeach

                        </div>
                        
                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Modal -->
<div class="modal fade " id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Product Short Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
          <div class="col-md-4">
              <div class="card" style="width: 16rem;">
              <img src="" class="card-img-top" id="pimage" style="height: 240px;">
              <div class="card-body">
               
              </div>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
              <ul class="list-group">
                <li class="list-group-item"> <h5 class="card-title" id="pname"></h5></span></li>
             <li class="list-group-item">Product code: <span id="pcode"> </span></li>
              <li class="list-group-item">Category:  <span id="pcat"> </span></li>
              <li class="list-group-item">SubCategory:  <span id="psubcat"> </span></li>
              <li class="list-group-item">Brand: <span id="pbrand"> </span></li>
              <li class="list-group-item">Stock: <span class="badge " style="background: green; color:white;">Available</span></li>
            </ul>
          </div>
          <div class="col-md-4 ">
              <form action="{{ route('insert.into.cart') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" id="product_id">
                <div class="form-group" id="colordiv">
                  <label for="">Color</label>
                  <select name="color" class="form-control">
                  </select>
                </div>
                 <div class="form-group" id="sizediv" >
                  <label for="exampleInputEmail1">Size</label>
                  <select name="size" class="form-control" id="size">
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Quantity</label>
                  <input type="number" class="form-control" value="1" name="qty">
                </div>
                <button type="submit" class="btn btn-primary">Add To Cart</button>
              </form>
           </div>
         </div>
      </div>  
    </div>
  </div>
</div>


<script type="text/javascript">

    function productview(id){
          $.ajax({
             url: 'api/product/view',
             type:"POST",
             data: {
                id: id,
             },
             dataType:"json",
             success:function(data) {
               $('#pname').text(data.product.product_name);
               $('#pimage').attr('src',data.product.image_one);
               $('#pcat').text(data.product.category_name);
               $('#psubcat').text(data.product.subcategory_name);
               $('#pbrand').text(data.product.brand_name);
               $('#pcode').text(data.product.product_code);
               $('#product_id').val(data.product.id);

                var d =$('select[name="size"]').empty();
                 $.each(data.size, function(key, value){
                     $('select[name="size"]').append('<option value="'+ value +'">' + value + '</option>');
                      if (data.size == "") {
                             $('#sizediv').hide();   
                      }else{
                            $('#sizediv').show();
                      } 
                 });

                var d =$('select[name="color"]').empty();
                 $.each(data.color, function(key, value){
                     $('select[name="color"]').append('<option value="'+ value +'">' + value + '</option>');
                       if (data.color == "") {
                             $('#colordiv').hide();
                      } else{
                           $('#colordiv').show();
                      }
                 });
             }
      })
    }
</script>




@endsection

