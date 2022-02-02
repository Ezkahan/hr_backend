<?php

namespace App\Containers\AppSection\People\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
use Log;

class PeopleRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    public function attachSkill(int $people_id, int $skill_id, string $level)
    {
        Log::info($people_id, $skill_id, $level);
    }
}
