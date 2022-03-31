<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;
use App\Models\Category;

class ProductListController extends Controller
{
    public function AllProductList(){

        $products = ProductList::latest()->paginate(6);
        return view('backend.product.product_all',compact('products'));

    }


    public function  ADDProductList(){

        $category = Category::orderBy('category_name','ASC')->get();
        return view('backend.product.product_add',compact('category'));
    }
    


    public function StoreProduct(Request $request){

        $request->validate([
            'title' => 'required',
             'price' =>'required',
             'special_price' => 'required',
             'category' => 'required',
             
         ]);

         $file = $request->file('image');
            // $file=avatar-1.png
            $filename = date('YmdHi').'.'.$file->getClientOriginalExtension();
    
            //$filename=26.3.2022.png
    
            $file->move(public_path('upload/product'), $filename);
    
            $save_url = 'http://127.0.0.1:8000/upload/product/'.$filename ;  

            $product_id = ProductList::insertGetId([
                'title' => $request->title,
                'price' => $request->price,
                'special_price' => $request->special_price,
                'category' => $request->category,
                'subcategory' => $request->subcategory,
                'remark' => $request->remark,
                'brand' => $request->brand,
                'product_code' => $request->product_code,
                'image' => $save_url, 
                'star'=>'5'
     
            ]);

            $notification = array(
                'message' => 'Product Inserted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.products')->with($notification);






    


    }

   
}
