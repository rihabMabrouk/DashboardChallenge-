<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function challenge()
 {
   return $this->belongsTo('App\Challenge', 'challenge_id');
 }
}
