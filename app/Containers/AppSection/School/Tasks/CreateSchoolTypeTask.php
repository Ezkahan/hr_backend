<?php

namespace App\Containers\AppSection\School\Tasks;

use App\Containers\AppSection\School\Data\Repositories\SchoolTypeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSchoolTypeTask extends Task
{
    protected SchoolTypeRepository $repository;

    public function __construct(SchoolTypeRepository $repository)
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
