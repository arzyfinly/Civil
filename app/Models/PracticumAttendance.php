<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class PracticumAttendance extends Model
{
    use HasFactory,HasRoles;

    protected $fillable = [
        'practicum_registration_id',
        'day_presence',
        'presence_time',
        'presence_day',
        'status',
    ];

    public function PracticumRegistration(){
        return $this->belongsTo(PracticumRegistration::class, 'practicum_registration_id');
    }
}
