<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{

    public function users() {
        return $this->belongsTo('App\User');
    }

    public function photos() {
        return $this->hasMany('App\Photo');
    }
}
