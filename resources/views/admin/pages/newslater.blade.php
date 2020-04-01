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
          <h5>Newsletter Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Newsletter List
            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modaldemo3" style="float: right;">Add New</a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Sl</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Subcribing Time</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($newsletters as $key=>$newsletter)
                <tr>
                  <td>{{$key + 1 }}</td>
                  <td>{{$newsletter->email}}</td>
                  <td>{{ $newsletter->created_at->diffForhumans() }}</td>
                  <td>
                    <a href="{{ route('newsletter.delete',$newsletter->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
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




@endsection

@push('js')



@endpush


