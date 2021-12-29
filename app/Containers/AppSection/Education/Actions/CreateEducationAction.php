<?php

namespace App\Containers\AppSection\Education\Actions;

use App\Containers\AppSection\Education\Models\Education;
use App\Containers\AppSection\Education\Tasks\CreateEducationTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateEducationAction extends Action
{
    public function run(Request $request): Education
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateEducationTask::class)->run($data);
    }
}
