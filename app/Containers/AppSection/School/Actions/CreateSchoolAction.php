<?php

namespace App\Containers\AppSection\School\Actions;

use App\Containers\AppSection\School\Models\School;
use App\Containers\AppSection\School\Tasks\CreateSchoolTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateSchoolAction extends Action
{
    public function run(Request $request): School
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateSchoolTask::class)->run($data);
    }
}
