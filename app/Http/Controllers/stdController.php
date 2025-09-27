<?php

namespace App\Http\Controllers;
use App\Models\stdModel;
use Illuminate\Http\Request;

class stdController extends Controller
{
    //
    function add(Request $request){
     $student = new stdModel();
     $student->name=$request->name;     
     $student->email=$request->email;     
     $student->phone=$request->phone;     
     $student->save();
     if($student){
        return "Student add successfully";
     } else {
         return "Student Add failed";
     }
     
    }

    function list(){
         $studentData = stdModel::all();
        return view('listStudent', ['student'=>$studentData]);
    } 

    function delete($id){
       $isDeleted = stdModel::destroy($id);
        if($isDeleted){
           return  redirect('list');
        }

    }

    function edit($id){
         $isStudent = stdModel::find($id);
         return view('editStudent', ['data'=>$isStudent]);

    }

}
