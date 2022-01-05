<?php

namespace App\Containers\AppSection\School\Actions;

use App\Containers\AppSection\School\Models\SchoolType;
use App\Containers\AppSection\School\Tasks\CreateSchoolTypeTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateSchoolTypeAction extends Action
{
    public function run(Request $request): SchoolType
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateSchoolTypeTask::class)->run($data);
    }
}
