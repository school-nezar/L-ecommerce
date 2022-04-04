<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartOrder;

class ProductCartController extends Controller
{
    public function PendingOrder(){

        $orders = CartOrder::where('order_status','Pending')->orderBy('id','DESC')->get();
        return view('backend.orders.pending_orders',compact('orders'));



    }


    public function ProcessingOrder(){
        $orders = CartOrder::where('order_status','Processing')->orderBy('id','DESC')->get();
        return view('backend.orders.processing_orders',compact('orders'));

    }

    public function CompleteOrder(){
        $orders = CartOrder::where('order_status','Complete')->orderBy('id','DESC')->get();
        return view('backend.orders.complete_orders',compact('orders'));

    }


    
    public function OrderDetails($id){

        $order = CartOrder::findOrFail($id);
        return view('backend.orders.order_details',compact('order'));


    } // End Method 



}
