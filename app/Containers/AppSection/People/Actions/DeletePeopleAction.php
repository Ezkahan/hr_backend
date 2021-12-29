<?php

namespace App\Containers\AppSection\People\Actions;

use App\Containers\AppSection\People\Tasks\DeletePeopleTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeletePeopleAction extends Action
{
    public function run(Request $request)
    {
        return app(DeletePeopleTask::class)->run($request->id);
    }
}
