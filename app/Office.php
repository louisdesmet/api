<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function location() {
        return $this->belongsTo('App\Location');
    }
}
