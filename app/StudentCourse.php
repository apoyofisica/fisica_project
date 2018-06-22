<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    public function students(){
        return $this->belongsTo('App\Student');
    }

    public function courses(){
        return $this->belongsTo('App\Course');
    }
}
