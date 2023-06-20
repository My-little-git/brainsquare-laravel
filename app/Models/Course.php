<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject_id',
        'course_type_id',
        'teacher_id',
        'seats',
        'lessons',
        'start_at',
        'end_at',
    ];

    protected $casts = [
        'name' => 'string',
        'subject_id' => 'integer',
        'course_type_id' => 'integer',
        'teacher_id' => 'integer',
        'seats' => 'integer',
        'lessons' => 'integer',
        'start_at' => 'date',
        'end_at' => 'date',
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function course_type(){
        return $this->belongsTo(CourseType::class);
    }
}
