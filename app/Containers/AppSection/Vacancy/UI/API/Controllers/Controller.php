<?php

namespace App\Containers\AppSection\Vacancy\UI\API\Controllers;

use App\Containers\AppSection\Vacancy\UI\API\Requests\CreateVacancyRequest;
use App\Containers\AppSection\Vacancy\UI\API\Requests\DeleteVacancyRequest;
use App\Containers\AppSection\Vacancy\UI\API\Requests\GetAllVacanciesRequest;
use App\Containers\AppSection\Vacancy\UI\API\Requests\FindVacancyByIdRequest;
use App\Containers\AppSection\Vacancy\UI\API\Requests\UpdateVacancyRequest;
use App\Containers\AppSection\Vacancy\UI\API\Transformers\VacancyTransformer;
use App\Containers\AppSection\Vacancy\Actions\CreateVacancyAction;
use App\Containers\AppSection\Vacancy\Actions\FindVacancyByIdAction;
use App\Containers\AppSection\Vacancy\Actions\GetAllVacanciesAction;
use App\Containers\AppSection\Vacancy\Actions\UpdateVacancyAction;
use App\Containers\AppSection\Vacancy\Actions\DeleteVacancyAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createVacancy(CreateVacancyRequest $request): JsonResponse
    {
        $vacancy = app(CreateVacancyAction::class)->run($request);
        return $this->created($this->transform($vacancy, VacancyTransformer::class));
    }

    public function findVacancyById(FindVacancyByIdRequest $request): array
    {
        $vacancy = app(FindVacancyByIdAction::class)->run($request);
        return $this->transform($vacancy, VacancyTransformer::class);
    }

    public function getAllVacancies(GetAllVacanciesRequest $request): array
    {
        $vacancies = app(GetAllVacanciesAction::class)->run($request);
        return $this->transform($vacancies, VacancyTransformer::class);
    }

    public function updateVacancy(UpdateVacancyRequest $request): array
    {
        $vacancy = app(UpdateVacancyAction::class)->run($request);
        return $this->transform($vacancy, VacancyTransformer::class);
    }

    public function deleteVacancy(DeleteVacancyRequest $request): JsonResponse
    {
        app(DeleteVacancyAction::class)->run($request);
        return $this->noContent();
    }
}
