<?php

namespace App\Containers\AppSection\Location\Models;

use App\Ship\Parents\Models\Model;
use Spatie\Translatable\HasTranslations;

class Area extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'country_id',
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

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Area';

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getNameAttribute()
    {
        return $this->getTranslations('name');
    }
}
