
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    function oneToManyRel(){
        return $this->belongsTo('App\Models\Seller');
    }
   
}
