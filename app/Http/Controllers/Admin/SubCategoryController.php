<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function AllSubCategory()
    {
        $subCategory=SubCategory::all();

        return view('backend.category.allsubcategory', compact('subCategory'));
    }
}
