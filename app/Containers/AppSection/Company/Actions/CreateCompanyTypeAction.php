<?php

namespace App\Containers\AppSection\Company\Actions;

use App\Containers\AppSection\Company\Models\CompanyType;
use App\Containers\AppSection\Company\Tasks\CreateCompanyTypeTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCompanyTypeAction extends Action
{
    public function run(Request $request): CompanyType
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateCompanyTypeTask::class)->run($data);
    }
}
