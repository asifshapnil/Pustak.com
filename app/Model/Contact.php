<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="contacts";

    public function user(){
        return $this->belongsTo('App\User');
     }
}
