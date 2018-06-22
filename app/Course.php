<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function teachers(){
        return $this->belongsTo('App\Teacher');
    }

    public function subjects(){
        return $this->belongsTo('App\Subject');
    }

    public function student_courses(){
        return $this->hasMany('App\StudentCourse');
    }
}
