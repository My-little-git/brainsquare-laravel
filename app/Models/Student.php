<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
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
        'patronymic',
        'phone',
        'email',
        'birthday',
        'note',
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
        'patronymic' => 'string',
        'note' => 'string',
        'email' => 'string',
        'birthday' => 'date',
        'phone' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
    ];
}