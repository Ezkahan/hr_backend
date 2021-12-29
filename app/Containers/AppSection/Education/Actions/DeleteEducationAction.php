<?php

namespace App\Containers\AppSection\Education\Actions;

use App\Containers\AppSection\Education\Tasks\DeleteEducationTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteEducationAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteEducationTask::class)->run($request->id);
    }
}
