<?php

namespace App\Containers\AppSection\Vacancy\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class VacancyRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
