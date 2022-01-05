<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Models\Area;
use App\Containers\AppSection\Location\Tasks\CreateAreaTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateAreaAction extends Action
{
    public function run(Request $request): Area
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateAreaTask::class)->run($data);
    }
}
