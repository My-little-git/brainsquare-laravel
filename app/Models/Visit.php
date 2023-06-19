<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'lesson_id',
        'mark',
        'is_missing',
        'is_valid',
    ];

    protected $casts = [
        'student_id' => 'integer',
        'lesson_id' => 'integer',
        'mark' => 'integer',
        'is_missing' => 'boolean',
        'is_valid' => 'boolean',
    ];
}
