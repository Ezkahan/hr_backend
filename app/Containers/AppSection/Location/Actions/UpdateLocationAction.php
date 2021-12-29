<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Models\Location;
use App\Containers\AppSection\Location\Tasks\UpdateLocationTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateLocationAction extends Action
{
    public function run(Request $request): Location
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateLocationTask::class)->run($request->id, $data);
    }
}
