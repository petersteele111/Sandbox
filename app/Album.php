<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // Create relation with User and Photo's Table

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
