<?php

namespace App\Models;

use App\Models\User;
use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory, WithPrimaryUuid;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function createdBy()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
