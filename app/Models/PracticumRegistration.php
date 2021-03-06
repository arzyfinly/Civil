<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class PracticumRegistration extends Model
{
    use HasFactory,HasRoles;

    protected $fillable = [
        'college_student_id',
        'practicum_id',
        'group',
        'status_pembayaran',
        'status',
    ];

    protected $nullable = [
        'group'
    ];
    protected $with = ['collegeStudent','practicum'];

    public function collegeStudent(){
        return $this->belongsTo(CollegeStudent::class, 'college_student_id');
    }

    public function practicum(){
        return $this->belongsTo(Practicum::class, 'practicum_id');
    }
}
