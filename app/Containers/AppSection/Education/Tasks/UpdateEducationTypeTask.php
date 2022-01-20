<?php

namespace App\Containers\AppSection\Education\Tasks;

use App\Containers\AppSection\Education\Data\Repositories\EducationTypeRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateEducationTypeTask extends Task
{
    protected EducationTypeRepository $repository;

    public function __construct(EducationTypeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
