<?php

namespace App\Containers\AppSection\People\Models;

use App\Ship\Parents\Models\Model;

class PassportIssuedBy extends Model
{
    protected $table = 'passport_issued_by';

    protected $fillable = [
        'name'
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'PassportIssuedBy';
}
