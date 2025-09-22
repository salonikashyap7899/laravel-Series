<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class studentsController extends Controller
{
    //
    function getStudents(){
        $data = new \App\Models\student;
        echo $data->testfunc();
        $students = \App\Models\student::all();
        return  view('students',['data'=>$students]);

    }
}
