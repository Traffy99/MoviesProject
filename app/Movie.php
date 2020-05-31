<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function review() {
        return $this->hasMany('App\Review');
    }
    public function viewing() {
        return $this->hasMany('App\Viewing');
    }
}
