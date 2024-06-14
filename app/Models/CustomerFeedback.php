<?php

namespace App\Models;

use App\Models\Tour;
use App\Traits\Models\WithPrimaryUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerFeedback extends Model
{
    use HasFactory, WithPrimaryUuid;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    const PARTICIPANTS = [
        '<5' => 'Dibawah 5 Orang',
        '>5' => 'Diatas 5 Orang',
        '>10' => 'Diatas 10 Orang'
    ];

    public function tour()
    {
        return $this->hasOne(Tour::class, 'id', 'tour_id');
    }
}
