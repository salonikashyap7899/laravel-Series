<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class Inline extends Controller
{
    //
    function inlineTemplate (){
        $totalProducts = 100;
        return Blade::render('<h1>Product List: {{ $totalProducts }}</h1>', ['totalProducts' => $totalProducts]);
    }
}
