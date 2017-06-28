<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // Create relation with Albums Table
    public function album() {
        return $this->belongsTo(Album::class);
    }
}
