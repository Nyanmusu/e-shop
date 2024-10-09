<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\products;
use App\Models\category;

class ShopController extends Controller{
    public function index()
    {
        return view("register", [
        ]);
    }

    public function shop_print(products $product, category $category){
        $product = products::all();
        $category = category::all();
        return view('shop', [
            'data' => $product,
            'data_2' => $category
        ]);
    }

    public function product_detail(products $id)
    {
        // $products = products::where('id',$id);
        $category = category::all();
        return view('product', [
            'data' => $category,
            'data_2' => $id
        ]);
    }
}