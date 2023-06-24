<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'address',
    ];

    protected $casts = [
        'name' => 'string',
        'city' => 'string',
        'address' => 'string'
    ];

    public function audiences(){
        return $this->hasMany(Audience::class);
    }
}
