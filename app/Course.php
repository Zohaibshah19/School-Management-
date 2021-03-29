<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    // public function teacherCourses(){
    //     return $this->hasMany(Course::class);
    // }

    public function teachers(){
        return $this->belongsToMany(Teacher::class,'teachercourses')->withTimestamps();
    }

    public function latestStatus() {
        return $this->teachers()->latest();
    }

}
