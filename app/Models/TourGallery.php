<?php

namespace App\Models;

use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourGallery extends Model
{
    use HasFactory, WithPrimaryUuid;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
        
    const FOLDER_NAME = 'tour-galleries';

    public function getImageURL()
    {
        return asset('storage/' . self::FOLDER_NAME . '/' . $this->image);
    }
}
