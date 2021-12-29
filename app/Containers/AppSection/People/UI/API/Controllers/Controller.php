<?php

namespace App\Containers\AppSection\People\UI\API\Controllers;

use App\Containers\AppSection\People\UI\API\Requests\CreatePeopleRequest;
use App\Containers\AppSection\People\UI\API\Requests\DeletePeopleRequest;
use App\Containers\AppSection\People\UI\API\Requests\GetAllPeopleRequest;
use App\Containers\AppSection\People\UI\API\Requests\FindPeopleByIdRequest;
use App\Containers\AppSection\People\UI\API\Requests\UpdatePeopleRequest;
use App\Containers\AppSection\People\UI\API\Transformers\PeopleTransformer;
use App\Containers\AppSection\People\Actions\CreatePeopleAction;
use App\Containers\AppSection\People\Actions\FindPeopleByIdAction;
use App\Containers\AppSection\People\Actions\GetAllPeopleAction;
use App\Containers\AppSection\People\Actions\UpdatePeopleAction;
use App\Containers\AppSection\People\Actions\DeletePeopleAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createPeople(CreatePeopleRequest $request): JsonResponse
    {
        $people = app(CreatePeopleAction::class)->run($request);
        return $this->created($this->transform($people, PeopleTransformer::class));
    }

    public function findPeopleById(FindPeopleByIdRequest $request): array
    {
        $people = app(FindPeopleByIdAction::class)->run($request);
        return $this->transform($people, PeopleTransformer::class);
    }

    public function getAllPeople(GetAllPeopleRequest $request): array
    {
        $people = app(GetAllPeopleAction::class)->run($request);
        return $this->transform($people, PeopleTransformer::class);
    }

    public function updatePeople(UpdatePeopleRequest $request): array
    {
        $people = app(UpdatePeopleAction::class)->run($request);
        return $this->transform($people, PeopleTransformer::class);
    }

    public function deletePeople(DeletePeopleRequest $request): JsonResponse
    {
        app(DeletePeopleAction::class)->run($request);
        return $this->noContent();
    }
}
