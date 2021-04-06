<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','father_name','class','phone','email','dob','image'];

    protected $table = 'students'; 
    // public function attendence(){
    //     return $this->hasOne(Attendence::class);
    // }


    // public function attendences(){
    //     return $this->HasMany('Attendence::class');
    // }

    // public function latestStatus() {
    //     return $this->teachers()->latest();
    // }


    
    // public function attendences(){
    //     return $this->belongsToMany(Attendences::class,'studentattendence')->withTimestamps();
    // }

    // public function latestStatus() {
    //     return $this->attendences()->latest();
    // }


    public function attendence(){
        return $this->hasMany('App\Attendence','student_id');
    }

    public function fees(){
        return $this->hasMany('App\Fee','student_id');
    }
}

