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
            ->select('orders.*', 'users.name', 'users.email')
            ->where('orders.status', 0)
            ->orderBy('id', 'DESC')
            ->get();
        $orders = DB::table('order_details')
            ->join('products', 'order_details.product_id', 'products.id')
            ->select('order_details.*', 'products.product_code')
            ->where('order_details.order_id', $id)
            ->get();
        $shipping = DB::table('shippings')->where('order_id', $id)->first();
        dd($shipping);
    }
}
