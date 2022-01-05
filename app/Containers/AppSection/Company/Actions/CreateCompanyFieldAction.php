<?php

namespace App\Containers\AppSection\Company\Actions;

use App\Containers\AppSection\Company\Models\CompanyField;
use App\Containers\AppSection\Company\Tasks\CreateCompanyFieldTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCompanyFieldAction extends Action
{
    public function run(Request $request): CompanyField
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateCompanyFieldTask::class)->run($data);
    }
}
