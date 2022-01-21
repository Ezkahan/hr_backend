<?php

namespace App\Containers\AppSection\People\Tasks;

use App\Containers\AppSection\People\Data\Repositories\NationalityRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateNationalityTask extends Task
{
    protected NationalityRepository $repository;

    public function __construct(NationalityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
