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
  public function rating(){
   return $this->hasMany('App\Model\Rating');
}
  public function exchane(){
    return $this->hasMany('App\Model\Exchange');
 }
  public function exchaneDetails(){
    return $this->hasMany('App\Model\ExchaneDetails');
  }

  public function book(){
     return $this->belongsTo('App\Model\Book');
  }

}
