<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Accessor;

class AccessorController extends Controller
{
    //
    function students(){
          return  Accessor::all();
    }
}
