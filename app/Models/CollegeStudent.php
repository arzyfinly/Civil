<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class CollegeStudent extends Model
{
    use HasFactory,HasRoles;

    protected $fillable = [
        'first_name',
        'last_name',
        'surename',
        'user_id',
        'nim',
        'alamat',
        'tgl_lahir',
        'tmpt_lahir',
        'no_hp',
        'gender',
    ];
    protected $with = ['user'];
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
