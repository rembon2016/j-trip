<?php

namespace App\Models;

use App\Models\Tour;
use App\Models\User;
use App\Traits\Models\Sluggable;
use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourType extends Model
{
    use HasFactory, WithPrimaryUuid, Sluggable;

    protected $slugReferenceColumn = 'title';
    protected $guarded = ['id', 'slug', 'created_at', 'updated_at'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    const FOLDER_NAME = 'tour-type';

    public function getImageURL()
    {
        return asset('storage/' . self::FOLDER_NAME . '/' . $this->image);
    }

    public function createdBy()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function tours()
    {
        return $this->hasMany(Tour::class, 'destination_id', 'id');
    }
}