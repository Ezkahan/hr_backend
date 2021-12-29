<?php

namespace App\Containers\AppSection\People\Actions;

use App\Containers\AppSection\People\Tasks\GetAllPeopleTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllPeopleAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllPeopleTask::class)->addRequestCriteria()->run();
    }
}
