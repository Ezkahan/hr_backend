<?php

namespace App\Containers\AppSection\Skill\Tasks;

use App\Containers\AppSection\Skill\Data\Repositories\SkillRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSkillTask extends Task
{
    protected SkillRepository $repository;

    public function __construct(SkillRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
