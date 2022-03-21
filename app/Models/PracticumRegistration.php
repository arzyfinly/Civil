<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class PracticumRegistration extends Model
{
    use HasFactory,HasRoles;

    protected $fillable = [
        'user_id',
        'practicum_price_id',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function practicumPrice(){
        return $this->belongsTo(PracticumPrice::class, 'practicum_price_id');
    }
}
