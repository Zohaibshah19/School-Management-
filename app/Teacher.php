<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','email','class','phone','dob','image','course_id'];

    public function classTeacher(){
        return $this->hasOne(Clas::class);
    }

    // public function teacher(){
    //     return $this->belongsTo(Course::class);
    // }



    // public function setCatAttribute($value)
    // {
    //     $this->attributes['course_id'] = json_encode($value);
    // }
  
    // /**
    //  * Get the categories
    //  *
    //  */
    // public function getCatAttribute($value)
    // {
    //     return $this->attributes['course_id'] = json_decode($value);
    // }



    public function courses(){
        return $this->belongsToMany(Course::class,'teachercourses')->withTimestamps();
    }

    public function latestStatus() {
        return $this->courses()->latest();
    }

}
