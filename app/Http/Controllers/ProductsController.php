<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\productDateils;
class ProductsController extends Controller
{
    //
    public function showForm(){
        return view("Product.Inert");
    }
    public function create(Request $request){
        // $request->validata([
        //     "name"=>"required|min:3|max:40",
        //     "price"=>"required|min:80|max:",
        //     "description"=>"required|min:5|max|100",
        // ]);
        $imgPath = null;
        if($request->hasFile('photo')){
            $imgPath = $request->file('photo')->store('ProductImage','public');
        }
      
        $productDetail= new ProductDateils();
        $productDetail->price = $request->price;
        $productDetail->description = $request->description;
        $productDetail->quantity =$request->many;
        $productDetail->made_in = $request->madein;
        $productDetail->product_id = $request->prodeuct_id;
        $productDetail->img_url =$imgPath;
        $productDetail->save();
    }
}
