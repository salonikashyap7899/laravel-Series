<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // function show(){
    //     return 'student list';
    // }
    // function add(){
    //     return 'add new std';
    // }

    function show(){
         return 'list of std';
    }
    function add(){
         return 'list of add std';
    }
    function deleted(){
         return 'list of deleted std';
    }
    function about($name){
         return $name;
    }
}
