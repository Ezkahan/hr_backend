<?php

namespace App\Containers\AppSection\Skill\Tasks;

use App\Containers\AppSection\Skill\Data\Repositories\SkillTypeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSkillTypeTask extends Task
{
    protected SkillTypeRepository $repository;

    public function __construct(SkillTypeRepository $repository)
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
