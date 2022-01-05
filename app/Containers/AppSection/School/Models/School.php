<?php

namespace App\Containers\AppSection\School\Models;

use App\Ship\Parents\Models\Model;

class School extends Model
{
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
}
