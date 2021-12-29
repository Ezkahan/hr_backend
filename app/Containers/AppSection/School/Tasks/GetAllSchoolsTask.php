<?php

namespace App\Containers\AppSection\School\Tasks;

use App\Containers\AppSection\School\Data\Repositories\SchoolRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSchoolsTask extends Task
{
    protected SchoolRepository $repository;

    public function __construct(SchoolRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
