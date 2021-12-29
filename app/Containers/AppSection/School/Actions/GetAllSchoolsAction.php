<?php

namespace App\Containers\AppSection\School\Actions;

use App\Containers\AppSection\School\Tasks\GetAllSchoolsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllSchoolsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllSchoolsTask::class)->addRequestCriteria()->run();
    }
}
