<?php

namespace App\Traits\Models;

use Illuminate\Support\Str;


trait WithPrimaryUuid
{
    public function __construct()
    {
        $this->keyType = 'string';
    }
    
    /**
     * Override Boot Method from Model Class.
     * 
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $model->id = Str::uuid();
            } catch (\Throwable $e) {
                abort(500, $e->getMessage());
            }
        });
    }

    public function getKeyType()
    {
        return 'string';
    }
}