<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    function trainees(){
        return $this->hasMany('App\Models\Trainee');
    }
    //use HasFactory;
}

