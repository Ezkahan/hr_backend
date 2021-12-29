<?php

namespace App\Containers\AppSection\School\Actions;

use App\Containers\AppSection\School\Models\School;
use App\Containers\AppSection\School\Tasks\FindSchoolByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindSchoolByIdAction extends Action
{
    public function run(Request $request): School
    {
        return app(FindSchoolByIdTask::class)->run($request->id);
    }
}
