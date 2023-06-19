<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'status_id',
        'coupon_id',
    ];

    protected $casts = [
        'student_id' => 'integer',
        'status_id' => 'integer',
        'coupon_id' => 'integer',
    ];

    public function coupon(){
        return $this->belongsTo(Coupon::class);
    }
}
