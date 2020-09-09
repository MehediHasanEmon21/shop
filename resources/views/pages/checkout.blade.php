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

						<div class="order_total_content " style="padding: 14px;">
					    
					      	
							     @if(Session::has('coupon'))

							     @else

									
									<h5>Apply Coupon</h5>
								     <form action="{{ route('apply.coupon') }}" method="post">
								     	@csrf
								     	 <div class="form-group col-lg-4">
		                                      <input type="text" class="form-control" name="coupon" required=""  aria-describedby="emailHelp" placeholder="Coupon Code">
		                                   </div>
		                                   <button type="submit" class="btn btn-danger ml-2">submit</button>
								     </form>


							     @endif
						
						   </div>


						<ul class="list-group col-lg-4" style="float: right;">
							
							  @if(Session::has('coupon'))

							  <li class="list-group-item">Subtotal :  <span style="float: right;"> $ {{ Session::get('coupon')['balance'] }}</span> </li>
							  
							  @else

							  <li class="list-group-item">Subtotal :  <span style="float: right;"> $ {{ Cart::Subtotal() }}</span> </li>

							  @endif
							
							  @if(Session::has('coupon'))
							  <li class="list-group-item">Coupon:<a class="btn btn-danger btn-sm" href="{{ route('destroy.coupon') }}">x</a> <span style="float: right;"> {{ Session::get('coupon')['coupon'] }}</span></li>
							  @endif

							  <li class="list-group-item">Shipping Charge: <span style="float: right;"> $ 10</span></li>
							  <li class="list-group-item">Vat :  <span style="float: right;"> 0</span></li>
					
							   @if(Session::has('coupon'))
							   <li class="list-group-item">Total:  <span style="float: right;">$ {{ Session::get('coupon')['balance'] + 10 }} </span> </li>
							   @else
								<li class="list-group-item">Total:  <span style="float: right;">$ {{ Cart::Subtotal() + 10 }} </span> </li>
							   @endif
							
						</ul>
						
					

						
					</div>
					
				</div>
				<div class="cart_buttons" style="float: right">
							<button type="button" class="button cart_button_clear">Add to Cart</button>
							<a href="{{ route('payment.page') }}" class="button cart_button_checkout">Final Step</a>
				</div>
			</div>
		</div>
	</div>


	<script src="{{asset('public/js/cart_custom.js')}}"></script>


@endsection
