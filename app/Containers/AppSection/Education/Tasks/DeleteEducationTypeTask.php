<?php

namespace App\Containers\AppSection\Education\Tasks;

use App\Containers\AppSection\Education\Data\Repositories\EducationTypeRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteEducationTypeTask extends Task
{
    protected EducationTypeRepository $repository;

    public function __construct(EducationTypeRepository $repository)
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
