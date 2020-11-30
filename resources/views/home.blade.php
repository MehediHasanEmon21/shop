
@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_styles.css') }}">


<div class="contact_form">
        <div class="container">
            <div class="row">
               <div class="col-8 card">
                 <table class="table table-response">
                   <thead>
                     <tr>
                       <th scope="col">PaymentType</th>
                       <th scope="col">Amount</th>
                       <th scope="col">Date</th>
                        <th scope="col">Status Code</th>
                        <th scope="col">Status </th>
                        <th scope="col">Action</th>
                     </tr>
                   </thead>
                   <tbody>
                   
                    @foreach($orders as $order)
                    <tr>
                      <td>{{ $order->payment_type }}</td>
                      <td>{{ $order->total }}</td>
                      <td>{{ $order->date }}</td>
                      <td>{{ $order->status_code }}</td>
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
                      <td><a href="javascript:void();" class="btn btn-sm btn-success">View</a></td>

                    </tr>
                    @endforeach
               
                   </tbody>
                 </table>
               </div>
               <div class="col-4">
                 <div class="card" style="width: 18rem;">
                  <img src="{{ asset('public/avatar.png') }}" class="card-img-top" style="height: 90px; width: 90px; margin-left: 34%;" >
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Password Change </a></li>
                    <li class="list-group-item"><a href=""> Edit Profile </a></li>
                    <li class="list-group-item"><a href="{{ route('success.orderlist') }}"> Return Order </a></li>
                  </ul>
                  <div class="card-body">
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                  </div>
                </div>
               </div>
            </div>
        </div>
    </div>

@endsection










