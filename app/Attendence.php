<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
        protected $fillable = ['date','isPresent'];

//         public function student(){
//             return $this->belongsTo(Student::class);
//         }



        // public function students(){
        //      return $this->belongsTo(Student::class,'teachercourses')->withTimestamps();
        // }

        // public function students(){
        //     return $this->belongsToMany(Student::class,'studentattendence');
        // }
    
        // public function latestStatus() {
        //     return $this->students()->latest();
        // }


        public function students()
        {
            $this->BelongsTo('App\Student');
        }


         //public $timestamps = false;
    }