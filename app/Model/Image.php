<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $table="images";

  public function userBooksDetail(){
     return $this->belongsTo('App\Model\UserBooksDetail');
  }

}
