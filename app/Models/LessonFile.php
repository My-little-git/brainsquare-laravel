<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'path',
        'original',
        'extension',
        'size',
    ];

    protected $casts = [
        'lesson_id' => 'integer',
        'path' => 'string',
        'original' => 'string',
        'extension' => 'string',
        'size' => 'integer'
    ];
}
