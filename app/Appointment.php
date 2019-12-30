<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
    
    public function office() {
        return $this->belongsTo('App\Office');
    }
    
    public function subject() {
        return $this->belongsTo('App\Subject');
    }
    
    public function contact() {
        return $this->belongsTo('App\Contact');
    }
}
