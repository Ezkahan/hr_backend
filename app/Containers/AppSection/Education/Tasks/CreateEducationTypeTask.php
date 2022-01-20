<?php

namespace App\Containers\AppSection\Education\Tasks;

use App\Containers\AppSection\Education\Data\Repositories\EducationTypeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateEducationTypeTask extends Task
{
    protected EducationTypeRepository $repository;

    public function __construct(EducationTypeRepository $repository)
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
