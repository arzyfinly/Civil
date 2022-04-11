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
        'praktikum_id',
        'status_pembayaran',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function praktikum(){
        return $this->belongsTo(Praktikum::class, 'praktikum_id');
    }
}
