<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;
use App\Models\Category;
use App\Models\ProductDetails;

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


            $file1 = $request->file('image_one');
            // $file=avatar-1.png
            $filename1 = hexdec(uniqid()).'.'.$file1->getClientOriginalExtension();
    
            //$filename=26.3.2022.png
    
            $file1->move(public_path('upload/productdetails'), $filename1);
    
            $save_url1 = 'http://127.0.0.1:8000/upload/productdetails/'.$filename1 ; 


            $file2 = $request->file('image_two');
            // $file=avatar-1.png
            $filename2= hexdec(uniqid()).'.'.$file2->getClientOriginalExtension();
    
            //$filename=26.3.2022.png
    
            $file2->move(public_path('upload/productdetails'), $filename2);
    
            $save_url2 = 'http://127.0.0.1:8000/upload/productdetails/'.$filename2 ; 

            
            $file3 = $request->file('image_three');
            $filename3= hexdec(uniqid()).'.'.$file3->getClientOriginalExtension();
            $file3->move(public_path('upload/productdetails'), $filename3);
            $save_url3 = 'http://127.0.0.1:8000/upload/productdetails/'.$filename3 ; 


            $file4 = $request->file('image_four');
            $filename4= hexdec(uniqid()).'.'.$file4->getClientOriginalExtension();
            $file4->move(public_path('upload/productdetails'), $filename4);
            $save_url4 = 'http://127.0.0.1:8000/upload/productdetails/'.$filename4 ; 



            ProductDetails::insert([
                'product_id' => $product_id,
                'image_one' => $save_url1,
                'image_two' => $save_url2,
                'image_three' => $save_url3,
                'image_four' => $save_url4,
                'short_description' => $request->short_description,
                'color' =>  $request->color,
                'size' =>  $request->size,
                'long_description' => $request->long_description,
    
            ]);
    


            $notification = array(
                'message' => 'Product Inserted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.products')->with($notification);



    }


public function DeleteProduct($id){

    ProductList::findOrFail($id)->delete();
    ProductDetails::where('product_id',$id)->delete();

     $notification = array(
        'message' => 'product Deleted Successfully',
        'alert-type' => 'info'
    );

    return redirect()->back()->with($notification);



}


public function EditProduct($id){

    $category = Category::orderBy('category_name','ASC')->get();
    $product=ProductList::findOrfail($id);
    $details=ProductDetails::where('product_id',$id)->first();
    
    return view('backend.product.product_edit',compact('category','product','details'));
   


}



   
}
