<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaPelaksanaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'practicum_registration_id',
    ];
    
    protected $nullable = [
        'attitude',
        'liveliness',
        'tool_mastery',
        'material_mastery',
        'notes',
    ];
    
    protected $with = ['practicum_registration'];

    public function practicumRegistration(){
        return $this->belongsTo(PracticumRegistration::class, 'practicum_registration_id');
    }
}
