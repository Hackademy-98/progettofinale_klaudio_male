<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory; 

     protected $fillable = ['title','description','year' ,'price', 'img','category_id'];
       
     public function category(){ 
        return $this->belongsTo(Category::class);
          
     } 
      
     public function optionals(){ 
       
      return $this->belongsToMany(Optional::class);
     }
}
