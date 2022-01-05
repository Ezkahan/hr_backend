<?php

namespace App\Containers\AppSection\Location\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class AddressTypeRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
