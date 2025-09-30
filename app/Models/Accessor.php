<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessor extends Model
{
    //
    function getNameAttribute($val){
        return ucfirst($val);
    }
    function getPhoneAttribute($val){
        return "+91-"+$val;
    }
}
