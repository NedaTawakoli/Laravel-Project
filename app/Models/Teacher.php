<?php

namespace App\Models;
use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function student(){
        return $this->hasMany(Student::class,'teacher_id');
    }
}
