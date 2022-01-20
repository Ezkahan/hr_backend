<?php

namespace App\Containers\AppSection\Education\Models;

use App\Containers\AppSection\Location\Models\Country;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Education extends Model
{
    use HasTranslations;

    public $translatable = [
        'name',
        'description',
    ];

    protected $fillable = [
        'name',
        'description',
        'country_id',
        'begin',
        'end',
        'education_type_id',
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [
        'name' => 'json',
        'description' => 'json',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function educationType(): BelongsTo
    {
        return $this->belongsTo(EducationType::class);
    }


    public function getNameAttribute()
    {
        return $this->getTranslations('name');
    }

    public function getDescriptionAttribute()
    {
        return $this->getTranslations('description');
    }

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Education';
}
