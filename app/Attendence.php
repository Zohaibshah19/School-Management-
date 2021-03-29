<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
        protected $fillable = ['student_id'];

//         public function student(){
//             return $this->belongsTo(Student::class);
//         }



        public function students(){
             return $this->belongsToMany(Student::class,'teachercourses')->withTimestamps();
        }

        public function latestStatus() {
            return $this->students()->latest();
        }
 }
