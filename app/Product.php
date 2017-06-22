<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

 class Product extends Model {
  
     protected $table = 'products';
     
     protected $fillable = array('title','description','price', 'image');
 }