<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function careers(){
        return $this->hasMany('App\Career');
    }

    public function student_course(){
        return $this->hasMany('App\StudentCourse');
    }
}
