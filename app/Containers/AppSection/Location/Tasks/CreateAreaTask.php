<?php

namespace App\Containers\AppSection\Location\Tasks;

use App\Containers\AppSection\Location\Data\Repositories\AreaRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAreaTask extends Task
{
    protected AreaRepository $repository;

    public function __construct(AreaRepository $repository)
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
