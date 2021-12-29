<?php

namespace App\Containers\AppSection\Education\Tasks;

use App\Containers\AppSection\Education\Data\Repositories\EducationRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllEducationTask extends Task
{
    protected EducationRepository $repository;

    public function __construct(EducationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
