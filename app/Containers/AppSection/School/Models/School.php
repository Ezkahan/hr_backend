<?php

namespace App\Containers\AppSection\School\Models;

use App\Ship\Parents\Models\Model;
use Spatie\Translatable\HasTranslations;

class School extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'school_type_id',
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [
        'name' => 'json'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'School';

    public function schoolType()
    {
        return $this->belongsTo(SchoolType::class);
    }

    public function getNameAttribute()
    {
        return $this->getTranslations('name');
    }
}
