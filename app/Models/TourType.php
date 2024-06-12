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
        return $this->hasMany(Tour::class, 'tour_type_id', 'id');
    }

    public function recommendedTours($limit = 5)
    {
        return $this->tours()->recommended($limit)->get();
    }

    public function featuredTours($limit = 3)
    {
        $data = $this->tours()->featured($limit)->get();
        if ($data->count() < 1) $data = $this->recommendedTours(3);

        return $data;
    }
}
