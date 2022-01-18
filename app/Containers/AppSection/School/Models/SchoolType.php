<?php

namespace App\Containers\AppSection\School\Models;

use App\Ship\Parents\Models\Model;
use Spatie\Translatable\HasTranslations;

class SchoolType extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name'];

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
    protected string $resourceKey = 'SchoolType';

    public function schools()
    {
        return $this->hasMany(School::class);
    }

    public function getNameAttribute()
    {
        return $this->getTranslations('name');
    }
}
