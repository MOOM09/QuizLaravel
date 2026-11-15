<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function lecturer()
    {
    return $this->belongsTo(Lecturer::class);
    
    }
    public function lectures()
    {
    return $this->hasMany(Lecture::class);
    
    }
    public function users()
    {
    return $this->belongsToMany(User::class)
    ->withPivot('enrollment_date', 'grade')
    ->withTimestamps();
    
    }
}
