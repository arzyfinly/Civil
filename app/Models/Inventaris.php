<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Inventaris extends Model
{
    use HasFactory,HasRoles;

    protected $fillable = [
        'tool_name',
        'general_price',
        'college_price',
        'stock',
    ];
}
