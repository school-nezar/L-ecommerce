<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function AllSubCategory()
    {
        $subCategory=SubCategory::all();

        return view('backend.category.allsubcategory', compact('subCategory'));
    }

public function AddSubCategory(){

    $Category=Category::all();

    return view('backend.category.addsubcategory',compact('Category'));

}


public function StoreSubCategory(Request $request){

  
    $request->validate([
        'category_name' => 'required',
        'subcategory_name' => 'required',
   ]);

   Subcategory::insert([
    'category_name' => $request->category_name,
    'subcategory_name' => $request->subcategory_name,
]);

$notification = array(
    'message' => 'SubCategory Inserted Successfully',
    'alert-type' => 'success'
);
return redirect()->route('all.subcategories')->with($notification);

 
}



public function DeleteSubCategory($id){

    SubCategory::findOrFail($id)->delete();
    $notification = array(
            'message' => 'subCategory Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
}


public function EditSubCategory($id){
  

    $Category = Category::orderBy('category_name','ASC')->get();
    $subcategory = SubCategory::findOrFail($id);
    return view('backend.category.subcategory_edit',compact('subcategory','Category'));

}

public function updateSubCategory(Request $request,$id){

    Subcategory::findOrFail($id)->update([
        'category_name' => $request->category_name,
        'subcategory_name' => $request->subcategory_name,
    ]);
    $notification = array(
        'message' => 'SubCategory Updated Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.subcategories')->with($notification);
    

}


public function GetSubCategory($category_id){
    $subcat = SubCategory::where('category_name',$category_id)->orderBy('subcategory_name','ASC')->get();
    return json_encode($subcat);
}



}
