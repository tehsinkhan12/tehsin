<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;



class User extends Model implements Authenticatable
{
    //
    use \Illuminate\Auth\Authenticatable;

  // public $timestamps = false;
   public function posts(){
   	return $this->hasMany('App\Post');
   }

    public function comments(){
   	return $this->hasMany('App\Comment');
   }

}
