<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'audience_id',
        'topic',
    ];

    protected $casts = [
        'course_id' => 'integer',
        'audience_id' => 'integer',
        'topic' => 'string',
    ];
}
