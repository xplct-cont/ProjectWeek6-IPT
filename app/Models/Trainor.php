<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainor extends Model
{
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function courses(){
        return $this->hasMany('App\Models\Courses');
     }

    //use HasFactory;
}
