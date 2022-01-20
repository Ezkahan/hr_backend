<?php

namespace App\Containers\AppSection\Education\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class EducationTypeRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
