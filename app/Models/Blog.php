<?php

namespace App\Models;

use App\Models\Tour;
use App\Models\User;
use App\Traits\Models\Sluggable;
use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, WithPrimaryUuid, Sluggable;

    protected $slugReferenceColumn = 'title';
    protected $guarded = ['id', 'created_at', 'updated_at', 'slug'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    const FOLDER_NAME = 'blog';

    public function getImageURL()
    {
        return asset('storage/' . self::FOLDER_NAME . '/' . $this->image);
    }

    public function createdBy()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function tour()
    {
        return $this->hasOne(Tour::class, 'id', 'tour_id');
    }
}
