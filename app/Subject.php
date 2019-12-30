<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function category() {
        return $this->belongsTo('App\SubjectCategory', 'subject_category_id');
    }
}
