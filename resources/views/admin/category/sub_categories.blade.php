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
          <h5>Sub Category Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Sub Category List
            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modaldemo3" style="float: right;">Add New</a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Sub Category Name</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sub_categories as $sub_category)
                <tr>
                  <td>{{$sub_category->subcategory_name}}</td>
                  <td>
                    <button data-toggle="modal" data-target="#edit_sub_category" data-sub-category-name="{{ $sub_category->subcategory_name }}" data-id="{{ $sub_category->id }}" data-category-id="{{$sub_category->category_id}}" class="btn btn-sm btn-primary">edit</button>
                    <a href="{{ route('subcategory.delete',$sub_category->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Sub Category</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-20">
              <form method="post" action="{{ route('subcategory.store') }}" id="addSubCategoryForm">
                @csrf
                <div class="row">
                  <div class="col-lg">
                    <input id="name" type="text" class="form-control" name="subcategory_name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Sub Category Name" data-parsley-required="true">
                  </div><!-- col -->
                </div>
                  <br>
                 <div class="row">
                  <div class="col-lg">
                    <select name="category_id" id="" class="form-control" data-parsley-required="true">
                      <option value="" selected="" disabled="" hidden>{{__('Select Category')}}</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                    </select>
                  </div><!-- col -->
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

      <!---- Edit sub_category -->
      <div id="edit_sub_category" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Sub Category</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="post" action="{{ route('subcategory.update') }}" id="editSubCategoryForm">
                    @csrf
                    <div class="modal-body pd-20">
        
                        <div class="row">
                          <div class="col-lg">
                            <input type="hidden" name="id" id="sub_category_id">
                            <input type="text" class="form-control" name="sub_category_name" id="edit_sub_category_name" autocomplete="name" autofocus placeholder="sub_category name" data-parsley-required="true">
                          </div><!-- col -->
                        </div>

                        <br>
                       <div class="row">
                        <div class="col-lg">
                          <select name="category_id" id="edit_category_id" class="form-control" data-parsley-required="true">
                            <option value="" selected="" disabled="" hidden>{{__('Select Category')}}</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                          </select>
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

<script src="{{asset('backend/custom/sub_category.js')}}" ></script>

@endpush


