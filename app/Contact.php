<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    
    public function offices()
    {
        return $this->belongsToMany('App\Office');
    }
}
