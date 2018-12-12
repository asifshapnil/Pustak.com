<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
  protected $table="exchange";

  public function exchangeDetail(){
    return $this->hasMany('App\Model\ExchangeDetails');
 }

 public function userBookDetail(){
  return $this->belongsTo('App\Model\UserBooksDetail');
}
}
