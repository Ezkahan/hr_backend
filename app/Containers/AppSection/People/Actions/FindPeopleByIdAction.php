<?php

namespace App\Containers\AppSection\People\Actions;

use App\Containers\AppSection\People\Models\People;
use App\Containers\AppSection\People\Tasks\FindPeopleByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindPeopleByIdAction extends Action
{
    public function run(Request $request): People
    {
        return app(FindPeopleByIdTask::class)->run($request->id);
    }
}
