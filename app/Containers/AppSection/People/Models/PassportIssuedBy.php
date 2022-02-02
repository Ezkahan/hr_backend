<?php

namespace App\Containers\AppSection\People\Models;

use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Builder;

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

    public function scopeSearch(Builder $builder, string $search): Builder
    {
        return $builder->where('name', 'LIKE', '%' . $search . '%');
    }
}
