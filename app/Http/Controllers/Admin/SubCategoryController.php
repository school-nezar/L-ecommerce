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



}
