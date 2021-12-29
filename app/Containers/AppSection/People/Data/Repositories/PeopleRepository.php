<?php

namespace App\Containers\AppSection\People\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class PeopleRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
