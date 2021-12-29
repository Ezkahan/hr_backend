<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Tasks\GetAllLocationsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllLocationsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllLocationsTask::class)->addRequestCriteria()->run();
    }
}
