<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    // function getUser(){
    //     $response = Http::get('https://jsonplaceholder.typicode.com/users/3');
    //       $response->body();
    //       return view('Api', ['data'=>json_decode($response)]);
    // }

    function users(){
        $result = DB::table('users')->get();
        // $result = DB::table('users')->where('password', '12345')->get();
        return view('users', ['users'=> $result]);
        //  $result = DB::table('users')->insert([
        //     'name'=>'tony',
        //     'email'=>'tondy@emx.com',
        //     'password'=>12345
        //  ]);
        //  if($result){
        //     return 'data inserted';
        //  } else {
        //     return "data not inderted ";
        //  }


        //  $result = DB::table('users')->where('name', 'tony')->update(['password'=>'3333']);
        //  if($result){
        //     return 'data Updated';
        //  } else {
        //     return "data not Updated ";
        //  }


        //  $result = DB::table('users')->where('name', 'tony')->delete();
        //  if($result){
        //     return 'data Updated';
        //  } else {
        //     return "data not Updated ";
        //  }
    }
}
