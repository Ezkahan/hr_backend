<?php

namespace App\Containers\AppSection\People\Tasks;

use App\Containers\AppSection\People\Data\Repositories\PassportSeriesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreatePassportSeriesTask extends Task
{
    protected PassportSeriesRepository $repository;

    public function __construct(PassportSeriesRepository $repository)
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
