<?php

namespace App\Containers\AppSection\Skill\Tasks;

use App\Containers\AppSection\Skill\Data\Repositories\SkillRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSkillTask extends Task
{
    protected SkillRepository $repository;

    public function __construct(SkillRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
