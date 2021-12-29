<?php

namespace App\Containers\AppSection\Education\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class EducationRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
