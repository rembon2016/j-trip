<?php

namespace App\Models;

use App\Models\TourType;
use App\Models\Destination;
use App\Traits\Models\Sluggable;
use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tour extends Model
{
    use HasFactory, WithPrimaryUuid, Sluggable;

    protected $guarded = ['id', 'slug', 'created_at', 'updated_at'];
    protected $slugReferenceColumn = 'title';

    const FOLDER_NAME = 'tour';

    public function getImageURL()
    {
        return asset('storage/' . self::FOLDER_NAME . '/' . $this->thumbnail);
    }

    public function createdBy()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function destination()
    {
        return $this->hasOne(Destination::class, 'id', 'destination_id');
    }

    public function type()
    {
        return $this->hasOne(TourType::class, 'id', 'tour_type_id');
    }

    // Scope Function
    public function scopeRecommended($query, $limit = 5)
    {
        return $query->limit($limit)->orderBy('total_visitor', 'DESC');
    }

    public function scopeFeatured($query, $limit = 3)
    {
        return $query->where('is_featured', true)->limit($limit)->orderBy('featured_at', 'DESC');
    }
}
