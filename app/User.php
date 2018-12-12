<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userBooksDetail(){
       return $this->hasMany('App\Model\UserBooksDetail');
    }
    public function profile(){
       return $this->hasOne('App\Model\Profile');
    }
    public function contacts(){
        return $this->hasMany('App\Model\Contact');
     }

}
