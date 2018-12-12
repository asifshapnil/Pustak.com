<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ExchangeDetails extends Model
{
  protected $table="exchangeDetails";

  public function exchange(){
    return $this->hasMany('App\Model\Exchange');
 }   
  public function userBooksDetail(){
    return $this->belongsTo('App\Model\UserBooksDetail');
  }
}
