<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('home')->with('products', $products);
    }


    public function searchProduct(Request $request) {
        if($request->term != '') {
            $data_product = Product::select('title')->where('title','LIKE','%'.$request->term.'%')->get();
      

        if(count($data_product) != 0) {
            foreach($data_product as $key)
            {
                $output[] = $key->title;
            }
            return $output;
        }
    }
}

    public function gettingProduct($product) {
        dd($product);
        $product = Product::where('title', 'LIKE', '%'.$product.'%');
        if($product) {
            echo $product->id;
        } else {
            $not_available = "Product Not Available";
        }
    }
}   
