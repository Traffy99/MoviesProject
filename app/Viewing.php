<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewing extends Model
{
    public function movie(){
        return $this->belongsTo('App\Movie');
    }
    public function reservations(){
        return $this->hasMany('App\Reservation');
    }
}
