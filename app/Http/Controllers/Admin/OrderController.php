<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function pending()
    {

        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', 'users.id')
            ->select('orders.*', 'users.name')
            ->where('orders.status', 0)->orderBy('id', 'DESC')->get();
        return view('admin.order.pending_order', compact('orders'));
    }

    public function detail($id)
    {
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', 'users.id')
            ->select('orders.*', 'users.name', 'users.email', 'users.phone')
            ->orderBy('orders.id', 'DESC')
            ->first();
        $orders = DB::table('order_details')
            ->join('products', 'order_details.product_id', 'products.id')
            ->select('order_details.*', 'products.product_code', 'products.product_name')
            ->where('order_details.order_id', $id)
            ->get();
        $shipping = DB::table('shippings')->where('order_id', $id)->first();


        return view('admin.order.detail', compact('order', 'orders', 'shipping'));
    }

    public function confirmOrder($id)
    {

        $order = DB::table('orders')->where('id', $id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Order Confirm Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function cancelOrder($id)
    {

        $order = DB::table('orders')->where('id', $id)->update(['status' => 4]);
        $notification = array(
            'messege' => 'Order Cancel Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
