<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'car';
    protected $primaryKey = 'id';
    protected $fillable = [
        'plate_num',
        'price',
        'model',
        'brand',
        'status',
        'condition',
        'last_service',
    ];

}
