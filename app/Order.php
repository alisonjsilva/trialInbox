<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = array('user_id','total');
    
    public function orderItems()
        {
            return $this->belongsToMany('App\Product') ->withPivot('amount','total');
        }
}
