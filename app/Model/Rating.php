<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table="ratings";

    public function userBooksDetail(){
        return $this->belongsTo('App\Model\UserBooksDetail');
     }
  
}
