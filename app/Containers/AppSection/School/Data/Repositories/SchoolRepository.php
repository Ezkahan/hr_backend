<?php

namespace App\Containers\AppSection\School\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class SchoolRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
