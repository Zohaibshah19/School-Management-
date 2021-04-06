<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = ['amount','day','month','year','student_id'];
    
    public function students()
        {
            
            return $this->belongsTo('App\Student','student_id');
            
        }

        // public function latestStatus() {
        //     return $this->students();
        // }
    


}
