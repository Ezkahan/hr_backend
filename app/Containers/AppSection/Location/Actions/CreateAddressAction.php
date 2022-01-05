<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Models\Address;
use App\Containers\AppSection\Location\Tasks\CreateAddressTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateAddressAction extends Action
{
    public function run(Request $request): Address
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateAddressTask::class)->run($data);
    }
}
