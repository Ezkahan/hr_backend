<?php

namespace App\Containers\AppSection\Education\Actions;

use App\Containers\AppSection\Education\Models\Education;
use App\Containers\AppSection\Education\Tasks\UpdateEducationTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateEducationAction extends Action
{
    public function run(Request $request): Education
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateEducationTask::class)->run($request->id, $data);
    }
}
