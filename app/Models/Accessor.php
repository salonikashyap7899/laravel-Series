<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PDO;

class Accessor extends Model
{
    //
    function getNameAttribute($val){
        return ucfirst($val);
    }
    function getPhoneAttribute($val){
        return "+91-"+$val;
    }
    function setNameAttribute($val){
           $this->attributes['name']=ucfirst($val);
    }
    function setPhoneAttribute($val){
           $this->attributes['phone']="+91" .$val;
    }
}
