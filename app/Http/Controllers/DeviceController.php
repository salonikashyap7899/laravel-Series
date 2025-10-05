<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    function index (Device $key){
        // $data=Device::all();
        return $key;
    }
}
