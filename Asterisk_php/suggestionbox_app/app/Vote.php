<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //protected $fillable = ['suggestion_id'];
    protected $guarded=['id'];

    
        
        //Attributes that we allow for mass assignment
        //protected $fillable =['suggestion_id];

        //Attributes that we Do Not allow for mass assignment

        //belongsTo is for the dependent Model/Table
     public function suggestion(){
        return $this->belongsTo('App\Suggestion');
     }

}
