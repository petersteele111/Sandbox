<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //
    public function albums() {
        return $this->belongsTo('App\Album');
    }
}
