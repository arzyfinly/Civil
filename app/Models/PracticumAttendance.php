<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class PracticumAttendance extends Model
{
    use HasFactory,HasRoles;

    protected $fillable = [
        'college_student_id',
        'practicum_id',
        'status', 
        'present_time',
    ];
    protected $with = ['collegeStudent','practicum','practicum_group_id'];

    public function collegeStudent(){
        return $this->belongsTo(CollegeStudent::class, 'college_student_id');
    }

    public function practicum(){
        return $this->belongsTo(Practicum::class, 'practicum_id');
    }
}
