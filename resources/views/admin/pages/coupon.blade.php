@extends('admin.admin_layouts')

@push('css')

@endpush

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Data Table</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Coupon Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Coupon List
            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modaldemo3" style="float: right;">Add New</a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Coupon Name</th>
                  <th class="wd-15p">Discount</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($coupons as $coupon)
                <tr>
                  <td>{{$coupon->coupon}}</td>
                  <td>{{$coupon->discount}}</td>
                  <td>
                    <button data-toggle="modal" data-target="#edit_coupon" data-discount="{{$coupon->discount}}" data-coupon-name="{{ $coupon->coupon }}" data-id="{{ $coupon->id }}" class="btn btn-sm btn-primary">edit</button>
                    <a href="{{ route('coupon.delete',$coupon->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

 

      </div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
</div><!-- sl-mainpanel -->

        <!-- LARGE MODAL -->
       <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add coupon</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-20">
              <form method="post" action="{{ route('coupon.store') }}" id="addCouponForm">
                @csrf
                <div class="row">
                  <div class="col-lg">
                    <input id="name" type="text" class="form-control" name="coupon" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Coupon name" data-parsley-required="true">
                  </div><!-- col -->
                </div>
                <br>
                <div class="row">
                  <div class="col-lg">
                    <input id="name" type="text" class="form-control" name="discount" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Discount" data-parsley-required="true">
                  </div><!-- col -->
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="Submit" class="btn btn-info pd-x-20">Save</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div><!-- modal-dialog -->
      </div><!-- modal -->

      <!---- Edit coupon -->
      <div id="edit_coupon" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit coupon</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="post" action="{{ route('coupon.update') }}" id="editCouponForm">
                    @csrf
                    <div class="modal-body pd-20">
        
                        <div class="row">
                          <div class="col-lg">
                            <input type="text" class="form-control" name="coupon" id="edit_coupon" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Coupon name" data-parsley-required="true">
                          </div><!-- col -->
                        </div>
                        <br>
                        <div class="row">
                          <input type="hidden" id="coupon_id" name="coupon_id">
                          <div class="col-lg">
                            <input type="text" class="form-control" name="discount" id="edit_discount" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Discount" data-parsley-required="true">
                          </div><!-- col -->
                        </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                      <button type="Submit" class="btn btn-info pd-x-20">Update</button>
                      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
            </div>
      </div>
@endsection

@push('js')

<script src="{{asset('public/backend/custom/category.js')}}" ></script>

@endpush


