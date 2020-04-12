@extends('admin.admin_layouts')

@push('css')

@endpush

@section('admin_content')

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>
      <div class="sl-pagebody">
           <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Product Update<a href="#" class="btn btn-success btn-sm pull-right">All Product</a></h6>
          <p class="mg-b-20 mg-sm-b-30">New product add form</p>
          <form action="{{ route('admin.product.update',$data['product']->id) }}" method="post">
            @csrf
              
              <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                      <input class="form-control @error('product_name') is-invalid @enderror" type="text" name="product_name" autocomplete="product_name"  value="{{ $data['product']->product_name}}" >
                      @error('product_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="product_code" value="{{ $data['product']->product_code}}" >
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Quantity <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="product_quantity" value="{{ $data['product']->product_quantity}}">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                      <select class="form-control select2 @error('category_id') is-invalid @enderror" data-placeholder="Choose Category" name="category_id">
                        <option label="Choose Category">
                        @foreach($data['categories'] as $category)
                          <option value="{{ $category->id }}" {{ $data['product']->category_id == $category->id ? 'selected' : '' }}>{{$category->category_name}}</option>
                        @endforeach

                        @error('category_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                        
                      </select>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" name="subcategory_id" >
                        
                         @foreach($data['subcategories'] as $subcategory)
                          <option value="{{ $subcategory->id }}" {{ $data['product']->subcategory_id == $subcategory->id ? 'selected' : '' }}>{{$subcategory->subcategory_name}}</option>
                        @endforeach
                        
                      </select>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                      <select class="form-control select2 @error('brand_id') is-invalid @enderror" data-placeholder="Choose country" name="brand_id">
                        <option label="Choose Brand"></option>
                        
                        @foreach($data['brands'] as $brand)
                          <option value="{{ $brand->id }}" {{ $data['product']->brand_id == $brand->id ? 'selected' : '' }}>{{$brand->brand_name}}</option>
                        @endforeach
                        @error('brand_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                      </select>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label><br>
                      <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput" value="{{ $data['product']->product_size}}">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label><br>
                      <input class="form-control lg-4" type="text" name="product_color" data-role="tagsinput" id="color" value="{{ $data['product']->product_color}}">

                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Selling Price <span class="tx-danger">*</span></label>
                      <input class="form-control @error('selling_price') is-invalid @enderror" type="text" name="selling_price"  placeholder="Selling Price" value="{{ $data['product']->selling_price}}">
                      @error('selling_price')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Discount Price <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="discount_price"  placeholder="Discount Price" value="{{ $data['product']->discount_price}}">
                    
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                       <textarea class="form-control" id="summernote" name="product_details">
                          {!! $data['product']->product_details !!}
                       </textarea>
                    </div>  
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Video Link<span class="tx-danger">*</span></label>
                       <input class="form-control" placeholder="video link" name="video_link" value="{{ $data['product']->video_link}}">
                    </div>  
                  </div>

              
         
           
                </div><!-- row -->
                <br><hr>
                <div class="row">
                  <div class="col-lg-4">
                    <label class="ckbox">
                <input type="checkbox" name="main_slider" value="1" {{ $data['product']->main_slider == 1 ? 'checked' : ''}}>
                <span>Main Slider</span>
              </label>
                  </div>
                  <div class="col-lg-4">
                    <label class="ckbox">
                <input type="checkbox" name="hot_deal" value="1" {{ $data['product']->hot_deal == 1 ? 'checked' : ''}}>
                <span>Hot Deal</span>
              </label>
                  </div>
                  <div class="col-lg-4">
                    <label class="ckbox">
                <input type="checkbox" name="best_rated" value="1" {{ $data['product']->best_rated == 1 ? 'checked' : ''}}>
                <span>Best Rated</span>
              </label>
                  </div>
                  <div class="col-lg-4">
                    <label class="ckbox">
                <input type="checkbox" name="trend" value="1" {{ $data['product']->trend == 1 ? 'checked' : ''}}>
                <span>Trend Product</span>
              </label>
                  </div>
                  <div class="col-lg-4">
                    <label class="ckbox">
                <input type="checkbox" name="mid_slider" value="1" {{ $data['product']->mid_slider == 1 ? 'checked' : ''}}>
                <span>Mid Slider</span>
              </label>
                  </div>
                  <div class="col-lg-4">
                    <label class="ckbox">
                      <input type="checkbox" name="hot_new" value="1" {{ $data['product']->hot_new == 1 ? 'checked' : ''}}>
                      <span>Hot New</span>
                    </label>
                  </div>

                  <div class="col-lg-4">
                    <label class="ckbox">
                      <input type="checkbox" name="buyone_getone" value="1" {{ $data['product']->hot_new == 1 ? 'checked' : ''}}>
                      <span>Buy One Get One</span>
                    </label>
                  </div>

                </div>

                <br><br><hr>
                <div class="form-layout-footer">
                  <button class="btn btn-info mg-r-5" type="submit">Submit </button>
                </div><!-- form-layout-footer -->
              </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Product Image Update<a href="#" class="btn btn-success btn-sm pull-right">All Product</a></h6>
            
            <form action="{{ route('product.image.update',$data['product']->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                  <div class="col-md-8 col-sm-8 col-lg-8" style="padding-bottom: 40px;">

            
                      <lebel>Image One<span class="tx-danger">*</span></lebel>
                      <label class="custom-file">
                        <input type="file" class="custom-file-input" name="image_one" onchange="readURL(this);" accept="image">
                        <span class="custom-file-control"></span>
                        <input type="hidden" name="old_image_one" value="{{$data['product']->image_one}}">
                      </label>
                  
                    
                  </div>
                  <div class="col-md-4 col-sm-4 col-lg-4">
                    <img src="{{ URL::to($data['product']->image_one)}}" id="one" style="width: 60px; height: 60px;" >
                  </div>

                  <br>
                   <div class="col-md-8 col-sm-8 col-lg-8" style="padding-bottom: 40px;">

            
                      <lebel>Image Two <span class="tx-danger">*</span></lebel>
                      <label class="custom-file">
                        <input type="file" class="custom-file-input" name="image_two" onchange="readURL1(this);" accept="image">
                        <input type="hidden" name="old_image_two" value="{{$data['product']->image_two}}">
                        <span class="custom-file-control"></span>
                      </label>
                  
                    
                  </div>
                  <div class="col-md-4 col-sm-4 col-lg-4">

                      <img src="{{ URL::to($data['product']->image_two)}}" style="width: 60px; height: 60px;" id="two" >
                    
                  </div>
                    
                    <br>
                    <div class="col-md-8 col-sm-8 col-lg-8" style="padding-bottom: 40px;">

            
                      <lebel>Image Three <span class="tx-danger">*</span></lebel>
                      <label class="custom-file">
                        <input type="file" class="custom-file-input" name="image_three" onchange="readURL2(this);" accept="/image">
                        <input type="hidden" name="old_image_three" value="{{$data['product']->image_three}}">
                        <span class="custom-file-control"></span>
                        
                    </label>                
                    
                  </div>
                  <div class="col-md-4 col-sm-4 col-lg-4">

                   <img src="{{ URL::to($data['product']->image_three)}}" style="width: 60px; height: 60px;" id="three" >
                        
                  </div>

                  <button type="submit" class="btn btn-success">Update Image</button>


              </div>

            </form>
   

        </div>
      </div>

    </div><!-- sl-mainpanel -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>




<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(60)
                  .height(60);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
  function readURL1(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#two')
                  .attr('src', e.target.result)
                  .width(60)
                  .height(60);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
  function readURL2(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#three')
                  .attr('src', e.target.result)
                  .width(60)
                  .height(60);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>



@endsection

@push('js')


@endpush


