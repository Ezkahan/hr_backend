<?php

namespace App\Containers\AppSection\School\Models;

use App\Ship\Parents\Models\Model;

class SchoolType extends Model
{
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
}
