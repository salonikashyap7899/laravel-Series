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
         $studentData = stdModel::paginate(10);
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

    function  editStudent(Request  $request, $id){
         $student = stdModel::find($id); 
         $student->name=$request->name;
         $student->email=$request->email;
         $student->phone=$request->phone;


        if($student->save()){
            return redirect('list');
        } else {
            return "update operation failed ";
        }

    }

    function search(Request $request){
        $stdData = stdModel::where('name', 'like'," %$request->search%")->get();
        return view('listStudent', ['student'=>   $stdData , 'search'=>$request->search]);
    }

    function DeletMulti(Request $request){
     $result = stdModel::destroy($request->ids);
         if( $result){
           return redirect('list');
         } else {
            return "student data not deleted ";
         }
    }
}
  