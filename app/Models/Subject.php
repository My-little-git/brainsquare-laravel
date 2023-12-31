<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
    ];

    protected $casts = [
        'name' => 'string',
        'color' => 'string',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
