<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'course_id',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'course_id' => 'integer',
    ];
}
