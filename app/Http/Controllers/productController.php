<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
class productController extends Controller
{
    public function index(){
        return view("products.index");
    }

    public function create(){
        return view("products.create");
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;    
        $product->description = $request->description;
        $product->image = $request->image;
    }
    
}
