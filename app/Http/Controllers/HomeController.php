<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class HomeController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('home')->with('products', $products);
    }


//     public function searchProduct(Request $request) {
//         if($request->term != '') {
//             $data_product = Product::select('title')->where('title','LIKE','%'.$request->term.'%')->get();
            

//         if(count($data_product) != 0) {
//             foreach($data_product as $key)
//             {
//                 $output[] = $key->title;
//             }
//             return $output;
//         }
//     }
// }

    public function gettingProduct($product) {

        $product = Product::where('title', 'LIKE', '%'.$product.'%')->first();
        if($product) {
            echo $product->id;
        } else {
            return response()->json(['not_exists' => 'Data not Found']);
        }
    }
    
    public function product_detail($id) {
        $product = Product::find($id);
        return view('product_detail')->with('product', $product);
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('products')
        ->where('title', 'LIKE', "%{$query}%")
        ->get();
      $output = '<div class="filter-box"><ul class="dropdown-menu" style="min-width:26rem; border-top:none; display:block; position:relative;">';
      foreach($data as $row)
      { 
       $output .= '
       <li><a href="#">'.$row->title.'</a></li>
       ';
      }
      $output .= '</ul></div>';
      echo $output;
     }
    }
}   
