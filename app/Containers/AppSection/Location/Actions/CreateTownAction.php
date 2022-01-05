<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Models\Town;
use App\Containers\AppSection\Location\Tasks\CreateTownTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateTownAction extends Action
{
    public function run(Request $request): Town
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateTownTask::class)->run($data);
    }
}
