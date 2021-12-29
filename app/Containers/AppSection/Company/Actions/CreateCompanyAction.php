<?php

namespace App\Containers\AppSection\Company\Actions;

use App\Containers\AppSection\Company\Models\Company;
use App\Containers\AppSection\Company\Tasks\CreateCompanyTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCompanyAction extends Action
{
    public function run(Request $request): Company
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateCompanyTask::class)->run($data);
    }
}
