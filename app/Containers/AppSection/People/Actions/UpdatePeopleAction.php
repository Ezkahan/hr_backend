<?php

namespace App\Containers\AppSection\People\Actions;

use App\Containers\AppSection\People\Models\People;
use App\Containers\AppSection\People\Tasks\UpdatePeopleTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdatePeopleAction extends Action
{
    public function run(Request $request): People
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdatePeopleTask::class)->run($request->id, $data);
    }
}
