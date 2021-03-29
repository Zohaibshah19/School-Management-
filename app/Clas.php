<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model

{
    protected $table = 'class';
    protected $fillable = ['name','section','teacher_id'];  
    
    

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
   
}

