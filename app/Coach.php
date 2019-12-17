<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    //
    public function players(){
      return $this->hasMany('App\Player');
    }

}
