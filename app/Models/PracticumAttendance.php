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
        'status_pembayaran',
        'status',
    ];
    protected $with = ['collegeStudent','practicum'];

    public function collegeStudent(){
        return $this->belongsTo(CollegeStudent::class, 'college_student_id');
    }

    public function practicum(){
        return $this->belongsTo(Practicum::class, 'practicum_id');
    }
}
