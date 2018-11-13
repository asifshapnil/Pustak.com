<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
  protected $table="writers";

  public function book(){
     return $this->hasMany('App\Model\Book');
  }

}
