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
          <h5>brand Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">brand List
            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#add_brand" style="float: right;">Add New</a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">brand Name</th>
                  <th class="wd-15p">Logo</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($brands as $brand)
                <tr>
                  <td>{{$brand->brand_name}}</td>
                  <td><img src="{{ URL::to($brand->brand_logo)}}" alt="" width="50" height="50"></td>
                  <td>
                    <button data-toggle="modal" data-target="#edit_brand" data-brand-name="{{ $brand->brand_name }}" data-id="{{ $brand->id }}" data-image="{{$brand->brand_logo}}" class="btn btn-sm btn-primary">edit</button>
                    <a href="{{ route('brand.delete',$brand->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
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
       <div id="add_brand" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add brand</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-20">
              <form method="post" action="{{ route('brand.store') }}" id="addbrandForm" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg">
                    <input id="name" type="text" class="form-control" name="brand_name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="brand name" data-parsley-required="true">
                  </div><!-- col -->

                  <div class="col-lg">
                    <input type="file" class="form-control" name="image" onchange="selectLogo(this)">
                    <img src="" id="brand-logo" style="display: none; padding-top: 10px;">
                  </div>
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="Submit" class="btn btn-info pd-x-20">Save changes</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div><!-- modal-dialog -->
      </div><!-- modal -->

      <!---- Edit brand -->
       <div id="edit_brand" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update brand</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-20">
              <form method="post" action="{{ route('brand.update') }}" enctype="multipart/form-data" id="editBrandForm">
                @csrf
                <div class="row">
                  <div class="col-lg">
                    <input type="hidden" name="id" id="brand_id">
                    <input type="text" class="form-control" id="edit_brand_name" name="brand_name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="brand name" data-parsley-required="true">
                  </div><!-- col -->

                  <div class="col-lg">
                  <input type="file" class="form-control" name="image" onchange="editselectLogo(this)">
                    <img src="" id="edit-brand-logo" style="padding-top: 10px; height: 50px; width: 50px;">
                  </div>
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="Submit" class="btn btn-info pd-x-20">Update</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div><!-- modal-dialog -->
      </div><!-- modal -->
@endsection

@push('js')

<script src="{{asset('public/backend/custom/brand.js')}}" ></script>

@endpush


