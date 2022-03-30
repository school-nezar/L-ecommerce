<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;

class ProductListController extends Controller
{
    public function AllProductList(){

        $products = ProductList::latest()->paginate(6);
        return view('backend.product.product_all',compact('products'));



    }
}
