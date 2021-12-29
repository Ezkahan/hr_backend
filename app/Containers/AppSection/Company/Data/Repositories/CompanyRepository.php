<?php

namespace App\Containers\AppSection\Company\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class CompanyRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
