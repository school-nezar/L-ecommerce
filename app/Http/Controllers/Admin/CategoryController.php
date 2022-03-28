<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory(){

       $Category=Category::all();

       return view ('backend.category.allcategory',compact('Category'));


    }


    public function   AddCategory(){

        return view ('backend.category.addcategory');
 
 
     }
 

  



  

}
