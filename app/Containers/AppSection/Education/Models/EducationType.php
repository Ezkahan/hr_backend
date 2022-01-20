<?php

namespace App\Containers\AppSection\Education\Models;

use App\Ship\Parents\Models\Model;
use Spatie\Translatable\HasTranslations;

class EducationType extends Model
{
    use HasTranslations;

    public $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [
        'name' => 'json',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function getNameAttribute()
    {
        return $this->getTranslations('name');
    }

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'EducationType';
}
