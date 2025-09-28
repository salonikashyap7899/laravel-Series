<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\image;

class imgeController extends Controller
{
    //
    function upload(Request $request){
        $path = $request->file('file')->store('public');
        $pathArray = explode('/', $path);
        $imgPath = $pathArray[1];
        $img = new image();
        $img->path = $imgPath;
        if ($img->save()) {
            return redirect('imgList');
        } else {
            return "error try after somtimes";
        }
    }

    function listimge(){
        $images = image::all();
        return view('ImageDisplay', ['img'=> $images]);
    }
}
