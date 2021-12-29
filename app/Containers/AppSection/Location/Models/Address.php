<?php

namespace App\Containers\AppSection\Location\Models;

use App\Ship\Parents\Models\Model;
use Spatie\Translatable\HasTranslations;

class Address extends Model
{
    use HasTranslations;

    public $translatable = [
        'address',
        'district'
    ];

    protected $fillable = [
        'country_id',
        'area_id',
        'town_id',
        'address',
        'district',
        'status',
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [
        'address' => 'json',
        'district' => 'json',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Address';
}
