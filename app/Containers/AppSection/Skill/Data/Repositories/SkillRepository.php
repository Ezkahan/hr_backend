<?php

namespace App\Containers\AppSection\Skill\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class SkillRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
