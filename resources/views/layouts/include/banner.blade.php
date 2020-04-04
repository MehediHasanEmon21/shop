
    <div class="banner">
        <div class="banner_background" style="background-image:url(public/frontend/images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="{{URL::to($product->image_one)}}" alt=""></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">{{$product->product_name}}</h1>
                        <div class="banner_price"><span>$530</span>${{(int) $product->selling_price}}</div>
                        <div class="banner_product_name">Apple</div>
                        <div class="button banner_button"><a href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>