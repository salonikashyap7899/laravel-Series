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

    function save(){
        $student  = new  Accessor();
        $student->name="bruce";
        $student->phone="111";
        $student->email="vruce@gmail.com";
        if($student->save()){
            echo "new student added";
        }
    }
}
 