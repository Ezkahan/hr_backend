<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Models\Location;
use App\Containers\AppSection\Location\Tasks\CreateLocationTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateLocationAction extends Action
{
    public function run(Request $request): Location
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateLocationTask::class)->run($data);
    }
}
