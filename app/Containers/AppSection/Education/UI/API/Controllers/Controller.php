<?php

namespace App\Containers\AppSection\Education\UI\API\Controllers;

use App\Containers\AppSection\Education\UI\API\Requests\CreateEducationRequest;
use App\Containers\AppSection\Education\UI\API\Requests\DeleteEducationRequest;
use App\Containers\AppSection\Education\UI\API\Requests\GetAllEducationRequest;
use App\Containers\AppSection\Education\UI\API\Requests\FindEducationByIdRequest;
use App\Containers\AppSection\Education\UI\API\Requests\UpdateEducationRequest;
use App\Containers\AppSection\Education\UI\API\Transformers\EducationTransformer;
use App\Containers\AppSection\Education\Actions\CreateEducationAction;
use App\Containers\AppSection\Education\Actions\FindEducationByIdAction;
use App\Containers\AppSection\Education\Actions\GetAllEducationAction;
use App\Containers\AppSection\Education\Actions\UpdateEducationAction;
use App\Containers\AppSection\Education\Actions\DeleteEducationAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createEducation(CreateEducationRequest $request): JsonResponse
    {
        $education = app(CreateEducationAction::class)->run($request);
        return $this->created($this->transform($education, EducationTransformer::class));
    }

    public function findEducationById(FindEducationByIdRequest $request): array
    {
        $education = app(FindEducationByIdAction::class)->run($request);
        return $this->transform($education, EducationTransformer::class);
    }

    public function getAllEducation(GetAllEducationRequest $request): array
    {
        $education = app(GetAllEducationAction::class)->run($request);
        return $this->transform($education, EducationTransformer::class);
    }

    public function updateEducation(UpdateEducationRequest $request): array
    {
        $education = app(UpdateEducationAction::class)->run($request);
        return $this->transform($education, EducationTransformer::class);
    }

    public function deleteEducation(DeleteEducationRequest $request): JsonResponse
    {
        app(DeleteEducationAction::class)->run($request);
        return $this->noContent();
    }
}
