<?php

namespace App\Containers\AppSection\People\Tasks;

use App\Containers\AppSection\People\Data\Repositories\PeopleRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class AddPeopleSkillTask extends Task
{
    protected PeopleRepository $repository;

    public function __construct(PeopleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(int $people_id, int $skill_id, string $level)
    {
        try {
            return $this->repository->attachSkill($people_id, $skill_id, $level);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
