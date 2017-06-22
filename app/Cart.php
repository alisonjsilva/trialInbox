<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = array('user_id','product_id','amount','total');
    
    public function Products(){
    
        return $this->belongsTo('App\Product','product_id');
    
    }
}
