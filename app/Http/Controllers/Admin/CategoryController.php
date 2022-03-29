<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $Category=Category::all();

        return view('backend.category.allcategory', compact('Category'));
    }


    public function AddCategory()
    {
        return view('backend.category.addcategory');
    }
 

    public function StoreCategory(Request $request)
    {
       
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_image'=> 'required'
        ]);

        $file = $request->file('category_image');
        // $file=avatar-1.png
        $filename = date('YmdHi').'.'.$file->getClientOriginalExtension();

        //$filename=26.3.2022.png

        $file->move(public_path('upload/category'), $filename);

        $save_url = 'http://127.0.0.1:8000/upload/category/'.$filename ;  

        Category::insert([
            'category_name' => $request->category_name,
            'category_image' =>  $save_url,
            'created_at'=>Now()
        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.categories')->with($notification);


       

    }


    public function EditCategory($id){

        $category = Category::findOrFail($id);
        return view('backend.category.category_edit',compact('category'));




    }




}
