<?php

namespace App\Containers\AppSection\Vacancy\Tasks;

use App\Containers\AppSection\Vacancy\Data\Repositories\VacancyRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateVacancyTask extends Task
{
    protected VacancyRepository $repository;

    public function __construct(VacancyRepository $repository)
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
