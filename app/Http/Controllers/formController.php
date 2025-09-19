<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    function addUser(Request $request){
       $request->validate([
        'username' => 'required | min:3 | max:15',
        'email' => 'required | email',
        'city' => 'required | Uppercase',
       ],[
        'username.required'=>'username can not be empty',
        'username.min'=>'username min charcter should be 3 ',
        'username.max'=>'username max charcter letter should be 16 ',
        
        'email.email'=>'email is not valid',
        'city.Uppercase' => 'city should be in uppercase ',
        

       ]);
      
    }
}
