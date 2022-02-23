<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    //All the attributes/columns of the suggestions table that are allowed for mass-assignment
   
    // public $fillable = ['content', 'author'];

    protected $guarded=['id'];

     public function votes(){
         return $this->hasMany('App\Vote');
     }

}
