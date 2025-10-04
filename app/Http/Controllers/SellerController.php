<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    function Sellerlist (){
       return  Seller::find(1)->productData;
    }

    function manyRel(){
        return Seller::find(1)->manyRel;
    }
    function oneToManyRel(){
         $data = Product::with('oneToManyRel')->get();
            return $data;
    }
}
