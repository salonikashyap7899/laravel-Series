<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function home(){
        return view('home');
    }

    function About(){
        return view('common.about');
    }


    // //
    // function getUser(){
    //     // return "sona kashyap";
    //     return view('user');
    // }
    // function about(){
    //     return "hello is this saloni kashyap";
    //        return view('aboutUser');
    // }
    // function getUserName($name){
    //     return view('getUser', ['name'=> $name]);
     
    // }

    // function adminLogin(){
    //      return view('admin.login');
    // }
    // function userhome(){
    //     return view('home');
    // // }
    function userAbout($name){
        $users = ['anil', 'sam', 'anu'];
        return view('about', ['name'=>$name, 'users' => $users]);
        // return view ('about');
    }
  
    // function adminLogin(){
    //     if(View::exists('admin.login')){
    //            return view('admin.login');
    //     } else {
    //         echo "no file exists";
    //     }
    //     return view('admin.login');
    // }
}