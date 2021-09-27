<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    public function trainor(){
        return $this->belongsTo('App\Models\Trainor');
    }

    public function trainees(){
        return $this->hasMany('App\MOdels\Trainee');
    }
    //use HasFactory;
}

