<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    public function coach(){
      return $this->belongsTo('App\Coach', 'coaches_id');
    }

}
