<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'center_id',
    ];

    protected $casts = [
        'name' => 'string',
        'center_id' => 'integer',
    ];

    public function center(){
        return $this->belongsTo(Center::class);
    }
}
