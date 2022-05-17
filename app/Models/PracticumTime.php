<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class PracticumTime extends Model
{
    use HasFactory,HasRoles;

    protected $fillable = [
        'practicum_id',
        'start_time_in_day',
        'end_time_in_day',
        'start_date',
        'end_end',
        'kelas',
        'tahun'
    ];
    protected $with = ['practicum'];

    public function practicum(){
        return $this->belongsTo(Practicum::class, 'practicum_id');
    }
}

