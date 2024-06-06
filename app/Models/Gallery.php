<?php

namespace App\Models;

use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory, WithPrimaryUuid;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    const FOLDER_NAME = 'galleries';

    public function getImageURL()
    {
        return asset('storage/' . self::FOLDER_NAME . '/' . $this->image);
    }

    public function createdBy()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
