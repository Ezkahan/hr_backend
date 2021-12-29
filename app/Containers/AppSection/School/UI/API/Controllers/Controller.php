<?php

namespace App\Containers\AppSection\School\UI\API\Controllers;

use App\Containers\AppSection\School\UI\API\Requests\CreateSchoolRequest;
use App\Containers\AppSection\School\UI\API\Requests\DeleteSchoolRequest;
use App\Containers\AppSection\School\UI\API\Requests\GetAllSchoolsRequest;
use App\Containers\AppSection\School\UI\API\Requests\FindSchoolByIdRequest;
use App\Containers\AppSection\School\UI\API\Requests\UpdateSchoolRequest;
use App\Containers\AppSection\School\UI\API\Transformers\SchoolTransformer;
use App\Containers\AppSection\School\Actions\CreateSchoolAction;
use App\Containers\AppSection\School\Actions\FindSchoolByIdAction;
use App\Containers\AppSection\School\Actions\GetAllSchoolsAction;
use App\Containers\AppSection\School\Actions\UpdateSchoolAction;
use App\Containers\AppSection\School\Actions\DeleteSchoolAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createSchool(CreateSchoolRequest $request): JsonResponse
    {
        $school = app(CreateSchoolAction::class)->run($request);
        return $this->created($this->transform($school, SchoolTransformer::class));
    }

    public function findSchoolById(FindSchoolByIdRequest $request): array
    {
        $school = app(FindSchoolByIdAction::class)->run($request);
        return $this->transform($school, SchoolTransformer::class);
    }

    public function getAllSchools(GetAllSchoolsRequest $request): array
    {
        $schools = app(GetAllSchoolsAction::class)->run($request);
        return $this->transform($schools, SchoolTransformer::class);
    }

    public function updateSchool(UpdateSchoolRequest $request): array
    {
        $school = app(UpdateSchoolAction::class)->run($request);
        return $this->transform($school, SchoolTransformer::class);
    }

    public function deleteSchool(DeleteSchoolRequest $request): JsonResponse
    {
        app(DeleteSchoolAction::class)->run($request);
        return $this->noContent();
    }
}
