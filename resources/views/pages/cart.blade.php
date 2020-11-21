@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/cart_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/cart_responsive.css')}}">

@section('left_sidebar')
@include('layouts.include.left_sidebar')
@endsection

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>
						<div class="cart_items">
							<ul class="cart_list">

								
								@foreach($contents as $product)
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{URL::to($product->options->image)}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{$product->name}}</div>
										</div>
										
										@if($product->options->color)
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text">{{$product->options->color}}</div>
										</div>
										@endif

										@if($product->options->size)
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Size</div>
											<div class="cart_item_text">{{$product->options->size}}</div>
										</div>
										@endif

										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div><br>
											<form method="post" action="{{ route('update.cartitem') }}">
												@csrf
												<input type="hidden" name="productid" value="{{ $product->rowId }}">	
											<input type="number" name="qty" value="{{ $product->qty }}" style="width: 60px; height: 30px;">
											  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i></button>
										   </form>
										</div>

										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">${{$product->price}}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">${{$product->price * $product->qty}}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Action</div>
											<a href="{{ route('cart.delete',$product->rowId) }}"><div class="cart_item_text">X</div></a>
										</div>
									</div>
								</li>
								@endforeach

							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">${{Cart::subtotal()}}</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">Add to Cart</button>
						
							<a href="{{ route('user.checkout') }}" class="button cart_button_checkout">Checkout</a>

						</div>
						<form action='https://2checkout.com/checkout/purchase' method='post'>
						<input type='hidden' name='sid' value='250604128234' />
						<input type='hidden' name='mode' value='2CO' />

						@php

							$content = Cart::content();

						@endphp

						@foreach($content as $row)
						<input type='hidden' name='li_{{ $row->id }}_type' value='product' />
						<input type='hidden' name='li_{{ $row->id }}_name' value='{{ $row->name }}' />
						<input type='hidden' name='li_{{ $row->id }}_price' value='{{ $row->price }}' />
						<input type='hidden' name='li_{{ $row->id }}_price' value='{{ $row->price }}' />
						@endforeach


						<input type='hidden' name='card_holder_name' value='Checkout Shopper' />
						<input type='hidden' name='street_address' value='123 Test Address' />
						<input type='hidden' name='street_address2' value='Suite 200' />
						<input type='hidden' name='city' value='Columbus' />
						<input type='hidden' name='state' value='OH' />
						<input type='hidden' name='zip' value='43228' />
						<input type='hidden' name='country' value='USA' />
						<input type='hidden' name='email' value='example@2co.com' />
						<input type='hidden' name='phone' value='614-921-2450' />
						<input type='hidden' name='demo' value='Y' />
						<input name='submit' type='submit' class="btn btn-success" value='Checkout' />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="{{asset('public/js/cart_custom.js')}}"></script>


@endsection
