<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;
use App\Models\User;

class UserController extends Controller
{
  
   

      

   function addUser(Request $request){
     $request->session()->flash('message', 'user has been added succesfully');
     $request->session()->flash('name', 'anil');
    return redirect('user');
   }





    //  function login(Request $request){
    //    echo  "Request methos is ".  $request->method();
    //    echo "<br>";
    //    echo  "Request methos is ".  $request->path();
    //    echo "<br>";
    //    echo  "Request methos is ".  $request->url();
    //    echo "<br>";
    //    echo  "name  is ".  $request->input('name');
    //    echo "<br>";
    //    print_r(($request->input()));
    //    echo "<br>";
    //    print_r(($request->collect()));

    //    if($request->isMethod('post')){
    //     echo "excute code for post req";
    //    } else {
    //          echo "excute code for post failed ";
    //    }
    //    if($request->is('post')){
    //     echo "excute code for post req";
    //    } else {
    //          echo "excute code for post failed ";
    //    }


    //  }


  
     // function get( ){
      //       return 'get routes methods';
      //   }
      // function post( ){
      //       return 'post routes methods';
      //   }
      // function put( ){
      //       return 'put routes methods';
      //   }
      // function delete( ){
      //       return 'delete routes methods';
      //   }
      // function any( ){
      //       return 'this is any function';
      //   }
      // function groupFunc( ){
      //       return 'this is groupFunc';
      //   }





    // function home(){
    //     return view('home');
    // }

    // function About(){
    //     return view('about');
    // }

    // function show(){
    //     return  to_route('hm');
    // }
    // function user(){
    //     return  to_route('user', ["name"=>'anil']);
    // }
    


    // function users(){
    //      $users = DB::select('select * from users');
    //      return view('users', ['users'=>$users]);
    // }

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
    // function userAbout($name){
    //     $users = ['anil', 'sam', 'anu'];
    //     return view('about', ['name'=>$name, 'users' => $users]);
    //     // return view ('about');
    // }
  
    // function adminLogin(){
    //     if(View::exists('admin.login')){
    //            return view('admin.login');
    //     } else {
    //         echo "no file exists";
    //     }
    //     return view('admin.login');
    // }



    // function queries(){
    //   $response = User::all();
    //   $response = User::get();
    // $response = User::where('phone', '12345')->get();
    //   $response = User::where('phone', '12345')->first();
    // $response =  User::find(1);

    //    $response = User::insert([
    //     'name'=>'kay',
    //     'email'=>'jay@gmail.com',
    //     'password'=>12345,
    //    ]);
    //    if($response){
    //      return 'data inserted';

    //    } else {
    //         return "data not inserted";
    //    }


    //    $response = User::where('name', 'kay')->update(['password' => 6789]);
    //    if($response){
    //      return 'data updated';

    //    } else {
    //         return "data not updated";
    //    }

    //    $response = User::where('name', 'kay')->delete();
    //    if($response){
    //      return 'data delete';

    //    } else {
    //         return "data not delete";
    //    }
        // return view('users', ['users'=>$response])};
        


      

    
}











