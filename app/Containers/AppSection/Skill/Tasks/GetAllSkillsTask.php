<?php

namespace App\Containers\AppSection\Skill\Tasks;

use App\Containers\AppSection\Skill\Data\Repositories\SkillRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSkillsTask extends Task
{
    protected SkillRepository $repository;

    public function __construct(SkillRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
