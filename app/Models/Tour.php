<?php

namespace App\Models;

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
        return asset('storage/' . self::FOLDER_NAME . '/' . $this->image);
    }
}
