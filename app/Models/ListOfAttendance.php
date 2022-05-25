<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOfAttendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'college_student_id',
        'practicum_registration_id',
        'presence_time',
        'day_presence',
    ];
    protected $with = ['college_student','practicum_registration'];
    

    public function PracticumRegistration(){
        return $this->belongsTo(PracticumRegistration::class, 'practicum_registration_id');
    }

    public function collegeStudent(){
        return $this->belongsTo(CollegeStudent::class, 'college_student_id');
    }
}
