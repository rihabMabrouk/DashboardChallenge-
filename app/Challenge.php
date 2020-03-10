<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
   public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function users()
   {
       return $this->belongsToMany('App\User');
   }
}
