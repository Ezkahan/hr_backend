<?php

namespace App\Containers\AppSection\Education\Actions;

use App\Containers\AppSection\Education\Models\Education;
use App\Containers\AppSection\Education\Tasks\FindEducationByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindEducationByIdAction extends Action
{
    public function run(Request $request): Education
    {
        return app(FindEducationByIdTask::class)->run($request->id);
    }
}
