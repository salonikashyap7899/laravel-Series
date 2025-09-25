<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upload extends Controller
{
    //
    function upload(Request $request){
        // $path = $request->file('file')->store('public');
        $path = $request->file('file')->storeAs('public', 'dummy2.png');
        $filenameArray = explode('/', $path);
        $filename = $filenameArray[1];
        return view('display', ['path'=> $filename ]);
        echo "upload function called";


    }
}
