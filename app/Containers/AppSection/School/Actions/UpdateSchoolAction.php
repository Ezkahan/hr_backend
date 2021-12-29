<?php

namespace App\Containers\AppSection\School\Actions;

use App\Containers\AppSection\School\Models\School;
use App\Containers\AppSection\School\Tasks\UpdateSchoolTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateSchoolAction extends Action
{
    public function run(Request $request): School
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateSchoolTask::class)->run($request->id, $data);
    }
}
