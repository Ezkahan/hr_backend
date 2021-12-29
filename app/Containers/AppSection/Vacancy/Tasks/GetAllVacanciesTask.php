<?php

namespace App\Containers\AppSection\Vacancy\Tasks;

use App\Containers\AppSection\Vacancy\Data\Repositories\VacancyRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllVacanciesTask extends Task
{
    protected VacancyRepository $repository;

    public function __construct(VacancyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
