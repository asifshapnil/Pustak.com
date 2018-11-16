<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserBooksDetail extends Model
{
  protected $table="userBooksDetails";

  public function user(){
     return $this->belongsTo('App\User');
  }

  public function image(){
     return $this->hasMany('App\Model\BookImage');
  }

  public function book(){
     return $this->belongsTo('App\Model\Book');
  }

}
