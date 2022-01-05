<?php

namespace App\Containers\AppSection\Location\Tasks;

use App\Containers\AppSection\Location\Data\Repositories\AddressTypeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAddressTypeTask extends Task
{
    protected AddressTypeRepository $repository;

    public function __construct(AddressTypeRepository $repository)
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
