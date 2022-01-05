<?php

namespace App\Containers\AppSection\Location\Tasks;

use App\Containers\AppSection\Location\Data\Repositories\TownRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateTownTask extends Task
{
    protected TownRepository $repository;

    public function __construct(TownRepository $repository)
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
