<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolRental extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventaris_id',
        'tenant',
        'type',
        'number_of_loan',
        'rent_of_day',
        'total_price',
    ];
    protected $with = ['inventaris'];
    

    public function inventaris(){
        return $this->belongsTo(Inventaris::class, 'inventaris_id');
    }
    
}
