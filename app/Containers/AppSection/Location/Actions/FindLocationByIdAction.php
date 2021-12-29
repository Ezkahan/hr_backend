<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Models\Location;
use App\Containers\AppSection\Location\Tasks\FindLocationByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindLocationByIdAction extends Action
{
    public function run(Request $request): Location
    {
        return app(FindLocationByIdTask::class)->run($request->id);
    }
}
