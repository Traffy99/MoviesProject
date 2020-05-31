<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function viewing() {
        return $this->belongsTo('App\Viewing');
    }
}
