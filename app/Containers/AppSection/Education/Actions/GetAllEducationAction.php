<?php

namespace App\Containers\AppSection\Education\Actions;

use App\Containers\AppSection\Education\Tasks\GetAllEducationTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllEducationAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllEducationTask::class)->addRequestCriteria()->run();
    }
}
