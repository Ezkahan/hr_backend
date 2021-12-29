<?php

namespace App\Containers\AppSection\Company\Models;

use App\Ship\Parents\Models\Model;
use Spatie\Translatable\HasTranslations;

class CompanyType extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name'];

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
    protected string $resourceKey = 'CompanyType';
}
