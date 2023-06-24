<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'name',
        'surname',
        'birthday',
        'education_id',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'avatar' => 'string',
        'name' => 'string',
        'surname' => 'string',
        'email' => 'string',
        'birthday' => 'date:Y-m-d',
        'education_id' => 'integer',
        'phone' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
    ];

    public function initials(){
        return $this->name . ' ' . $this->surname;
    }

    public function education(){
        return $this->belongsTo(Education::class);
    }
}
