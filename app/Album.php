<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // Create relation with User and Photo's Table

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function photos(){
        return $this->hasMany('App\Photos');
    }
}
