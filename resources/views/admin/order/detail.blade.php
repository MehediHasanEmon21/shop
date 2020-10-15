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
                <h5>Order Detail</h5>
            </div><!-- sl-page-title -->
            <div class="row">
                <div class="col-md-6">

                    <div class="card pd-20 pd-sm-40">

                        <div class="card-header">

                            <h6 class="card-body-title">Cusromer Detail
                            </h6>

                            <div class="card-body">
                                <table class="table table-striped table-bordered">

                                    <tr>
                                        <td> <strong>Customer Name:</strong> </td>
                                        <td> {{ $order->name }} </td>
                                    </tr>

                                    <tr>
                                        <td> <strong>Customer Email:</strong> </td>
                                        <td> {{ $order->email }} </td>
                                    </tr>

                                    <tr>
                                        <td> <strong>Customer Mobile:</strong> </td>
                                        <td> {{ $order->phone }} </td>
                                    </tr>

                                    <tr>
                                        <td> <strong>Order Status:</strong> </td>
                                        <td>
                                            @if ($order->status == 0)
                                                <span class="badge badge-danger">Pending</span>
                                            @elseif($order->status == 1)
                                                <span class="badge badge-success">Payment Accept</span>
                                            @elseif($order->status == 2)
                                                <span class="badge badge-info">Progress</span>
                                            @elseif($order->status == 3)
                                                <span class="badge badge-warning">Delivered</span>
                                            @else
                                                <span class="badge badge-success">Cancel</span>
                                            @endif
                                        </td>

                                    </tr>



                                </table>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card pd-20 pd-sm-40">

                        <div class="card-header">

                            <h6 class="card-body-title"> Shipping Detail

                            </h6>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">

                                    <tr>
                                        <td> <strong>Shipping Name:</strong> </td>
                                        <td> {{ $shipping->name }} </td>
                                    </tr>

                                    <tr>
                                        <td> <strong>Shipping Email:</strong> </td>
                                        <td> {{ $shipping->email }} </td>
                                    </tr>

                                    <tr>
                                        <td> <strong>Shipping Mobile:</strong> </td>
                                        <td> {{ $shipping->phone }} </td>
                                    </tr>

                                    <tr>
                                        <td> <strong>Shipping Address:</strong> </td>
                                        <td>
                                            {{ $shipping->address }}
                                        </td>

                                    </tr>

                                    {{-- <tr>
                                        <td> <strong>Shipping City:</strong> </td>
                                        <td>
                                            {{ $shipping->city }}
                                        </td>

                                    </tr> --}}



                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Order List
                            {{-- <a href="#" class="btn btn-sm btn-warning"
                                data-toggle="modal" data-target="#modaldemo3" style="float: right;">Add New</a>
                            --}}
                        </h6>

                        <div class="table-wrapper">
                            <table class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">SL.</th>
                                        <th class="wd-15p">Product Name</th>
                                        <th class="wd-15p">Quantity</th>
                                        <th class="wd-15p">Unit Price</th>
                                        <th class="wd-15p">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $key => $order_detail)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $order_detail->product_name }}</td>
                                            <td>{{ $order_detail->product_quantity }}</td>
                                            <td>{{ $order_detail->singleprice }}</td>
                                            <td>{{ $order_detail->totalprice }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                    @if($order->status == 0)
                    <a href="{{ route('order.confirm', $order->id) }}" class="btn btn-success btn-block">Accept Order</a>
                    <a href="{{ route('order.cancel', $order->id) }}" class="btn btn-primary btn-block">Cancel Order</a>
                    @elseif($order->status == 1)
                    <a href="{{ route('order.progress.delivery', $order->id) }}" class="btn btn-success btn-block">Progress Delivery</a>
                     @elseif($order->status == 2)
                     <a href="{{ route('order.delivered', $order->id) }}" class="btn btn-success btn-block">Delivered Order</a>
                    @elseif($order->status == 3)
                        <a href="javascript:void();" class="btn btn-info btn-block">Order Delivered</a>
                    @else
                        <a href="javascript:void();" class="btn btn-info btn-block">Order Canceled</a>
                    @endif



                </div>

            </div>



        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->




@endsection

@push('js')

    <script src="{{ asset('backend/custom/category.js') }}"></script>

@endpush
