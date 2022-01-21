<?php

namespace App\Containers\AppSection\People\Tasks;

use App\Containers\AppSection\People\Data\Repositories\PassportSeriesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdatePassportSeriesTask extends Task
{
    protected PassportSeriesRepository $repository;

    public function __construct(PassportSeriesRepository $repository)
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
