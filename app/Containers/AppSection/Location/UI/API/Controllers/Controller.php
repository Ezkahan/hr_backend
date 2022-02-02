<?php

namespace App\Containers\AppSection\Location\UI\API\Controllers;

use App\Containers\AppSection\Location\UI\API\Requests\CreateLocationRequest;
use App\Containers\AppSection\Location\UI\API\Requests\DeleteLocationRequest;
use App\Containers\AppSection\Location\UI\API\Requests\GetAllLocationsRequest;
use App\Containers\AppSection\Location\UI\API\Requests\FindLocationByIdRequest;
use App\Containers\AppSection\Location\UI\API\Requests\UpdateLocationRequest;
use App\Containers\AppSection\Location\UI\API\Transformers\LocationTransformer;
use App\Containers\AppSection\Location\Actions\CreateLocationAction;
use App\Containers\AppSection\Location\Actions\FindLocationByIdAction;
use App\Containers\AppSection\Location\Actions\GetAllLocationsAction;
use App\Containers\AppSection\Location\Actions\UpdateLocationAction;
use App\Containers\AppSection\Location\Actions\DeleteLocationAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createLocation(CreateLocationRequest $request): JsonResponse
    {
        $location = app(CreateLocationAction::class)->run($request);
        return $this->created($this->transform($location, LocationTransformer::class));
    }

    public function findLocationById(FindLocationByIdRequest $request): array
    {
        $location = app(FindLocationByIdAction::class)->run($request);
        return $this->transform($location, LocationTransformer::class);
    }

    public function getAllLocations(GetAllLocationsRequest $request): array
    {
        $location = app(GetAllLocationsAction::class)->run($request);
        return $this->transform($location, LocationTransformer::class);
    }

    public function updateLocation(UpdateLocationRequest $request): array
    {
        $location = app(UpdateLocationAction::class)->run($request);
        return $this->transform($location, LocationTransformer::class);
    }

    public function deleteLocation(DeleteLocationRequest $request): JsonResponse
    {
        app(DeleteLocationAction::class)->run($request);
        return $this->noContent();
    }
}
