<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachercourse extends Model
{
    protected $fillable=[
        'teacher_id',
        'course_id'
        ];
}
