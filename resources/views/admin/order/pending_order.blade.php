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
                <h5>Order Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Order List
                    {{-- <a href="#" class="btn btn-sm btn-warning" data-toggle="modal"
                        data-target="#modaldemo3" style="float: right;">Add New</a> --}}
                </h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">Order Customer</th>
                                <th class="wd-15p">Payment Id</th>
                                <th class="wd-15p">Payment Type</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-15p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->payment_id }}</td>
                                    <td>{{ $order->payment_type }}</td>
                                    <td>
                                        @if ($order->status == 0)
                                            <span class="badge badge-danger">Pending</span>
                                        @else
                                            <span class="badge badge-success">Success</span>
                                        @endif
                                    </td>
                                    <td>

                                        <a href="{{ route('order.detail', $order->id) }}"
                                            class="btn btn-sm btn-info">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->



        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->




@endsection

@push('js')

    <script src="{{ asset('backend/custom/category.js') }}"></script>

@endpush
