<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product as ModelsProduct;

class ProductController extends Controller
{
    public function index()
    {
        return view("product.index")->with("products", ModelsProduct::get());
    }


    public function show($id)
    {
        return view("product.show")->with("product", Product::find($id));
    }
}
