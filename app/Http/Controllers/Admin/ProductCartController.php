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


    public function PendingToProcessing($id){

        CartOrder::findOrFail($id)->update(['order_status' => 'Processing']);
    
         $notification = array(
                'message' => 'Order Processing Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('pending.order')->with($notification);
    
        } // End Method 



        
    public function ProcessingToComplete($id){

        CartOrder::findOrFail($id)->update(['order_status' => 'Complete']);
    
         $notification = array(
                'message' => 'Order Complete Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('processing.order')->with($notification);
    
        } // End Method 



        public function OrderDelete($id){
            CartOrder::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Order deleted Successfully',
                'alert-type' => 'warning'
            );
    
            return redirect()->back()->with($notification);

        }


}
