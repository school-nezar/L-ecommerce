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
    


   
}
