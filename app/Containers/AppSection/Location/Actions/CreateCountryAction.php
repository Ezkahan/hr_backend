<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Models\Country;
use App\Containers\AppSection\Location\Tasks\CreateCountryTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCountryAction extends Action
{
    public function run(Request $request): Country
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateCountryTask::class)->run($data);
    }
}
