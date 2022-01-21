<?php

namespace App\Containers\AppSection\People\Tasks;

use App\Containers\AppSection\People\Data\Repositories\PassportIssuedByRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdatePassportIssuedByTask extends Task
{
    protected PassportIssuedByRepository $repository;

    public function __construct(PassportIssuedByRepository $repository)
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
