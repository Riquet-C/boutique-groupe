<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductController extends Controller
{
    public function product(){
//        $products = DB::select('select * from products');
//        return view('product-list', ['product' => $products]);
        $products = Products::all();
        return view('product-list', ['product' => $products]);
    }
    public function productNameSort(){
//        $products = DB::select('select * from products');
//        return view('product-list', ['product' => $products]);
          $products = Products::all()
              ->sortBy('name');
          return view('product-list', ['product' => $products]);
    }

    public function productPriceSort(){
//        $products = DB::select('select * from products');
//        return view('product-list', ['product' => $products]);
        $products = Products::all()
            ->sortBy('price');
        return view('product-list', ['product' => $products]);
    }

    public function productId($id){
        $product = DB::select('select * from products where id = ?', [$id]);
        return view('product-details', ['product' => $product[0]]);
    }
}
