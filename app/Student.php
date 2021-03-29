<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','father_name','class','phone','email','dob','image'];

    // public function attendence(){
    //     return $this->hasOne(Attendence::class);
    // }


    public function teachers(){
        return $this->belongsToMany(Teacher::class,'teachercourses')->withTimestamps();
    }

    public function latestStatus() {
        return $this->teachers()->latest();
    }


}

