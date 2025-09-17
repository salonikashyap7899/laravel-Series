<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        // return "sona kashyap";
        return view('user');
    }
    function about(){
        return "hello is this saloni kashyap";
           return view('aboutUser');
    }
    function getUserName($name){
        return view('getUser', ['name'=> $name]);
     
    }

    function adminLogin(){
         return view('admin.login');
    }
}
