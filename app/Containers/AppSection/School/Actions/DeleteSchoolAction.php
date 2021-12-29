<?php

namespace App\Containers\AppSection\School\Actions;

use App\Containers\AppSection\School\Tasks\DeleteSchoolTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteSchoolAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteSchoolTask::class)->run($request->id);
    }
}
