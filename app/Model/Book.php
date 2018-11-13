<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table="books";

    public function userBooksDetail(){
       return $this->hasMany('App\Model\UserBooksDetail');
    }

    public function category(){
       return $this->belongsTo('App\Model\Category');
    }

    public function writer(){
       return $this->belongsTo('App\Model\Writer');
    }
}
