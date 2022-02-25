<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // get the list of products with information
    public function getAllProducts(){
        return response()->json(Product::all());
    }
}
