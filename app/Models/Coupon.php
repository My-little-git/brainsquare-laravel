<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'value',
        'type',
        'only_once',
        'expired_at',
        'description',
    ];

    protected $casts = [
        'code' => 'string',
        'value' => 'double',
        'type' => 'boolean',
        'only_once' => 'boolean',
        'expired_at' => 'datetime:Y-m-d H:i:s',
        'description' => 'string',
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
