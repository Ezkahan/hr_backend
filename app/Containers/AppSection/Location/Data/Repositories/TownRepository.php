<?php

namespace App\Containers\AppSection\Location\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class TownRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
