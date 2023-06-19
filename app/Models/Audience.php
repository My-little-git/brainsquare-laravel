<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address_id',
    ];

    protected $casts = [
        'name' => 'string',
        'address_id' => 'integer',
    ];
}
