<?php

namespace App\Models;

use App\Models\User;
use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory, WithPrimaryUuid;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function updatedBy()
    {
        return $this->hasOne(User::class, 'id', 'updated_by');
    }

    public function getFormatWhatsappNumberAttribute()
    {
        return substr($this->whatsapp_number, 2);
    }

    public function getFormatPhoneNumberAttribute()
    {
        return substr($this->phone, 2);
    }
}
