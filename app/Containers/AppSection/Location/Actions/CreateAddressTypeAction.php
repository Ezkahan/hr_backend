<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Models\AddressType;
use App\Containers\AppSection\Location\Tasks\CreateAddressTypeTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateAddressTypeAction extends Action
{
    public function run(Request $request): AddressType
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateAddressTypeTask::class)->run($data);
    }
}
