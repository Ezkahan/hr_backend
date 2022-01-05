<?php

namespace App\Containers\AppSection\Company\Tasks;

use App\Containers\AppSection\Company\Data\Repositories\CompanyTypeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCompanyTypeTask extends Task
{
    protected CompanyTypeRepository $repository;

    public function __construct(CompanyTypeRepository $repository)
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
