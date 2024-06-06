<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, WithPrimaryUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['email_verified_at', 'remember_token', 'created_at', 'updated_at'];

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
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    const FOLDER_NAME = 'user/avatar';

    public function scopeIsActive($query)
    {
        return $query->whereNotNull('email_verified_at');
    }

    public function getProfileImageURL()
    {
        return asset('storage/' . self::FOLDER_NAME . '/' . $this->image);
    }
}
