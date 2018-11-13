<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table="profile";

  public function user(){
     return $this->hasOne('App\User');
  }

}
