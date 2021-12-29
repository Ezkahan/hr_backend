<?php

namespace App\Containers\AppSection\Vacancy\Tasks;

use App\Containers\AppSection\Vacancy\Data\Repositories\VacancyRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateVacancyTask extends Task
{
    protected VacancyRepository $repository;

    public function __construct(VacancyRepository $repository)
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
