<?php

namespace App\Containers\AppSection\Company\Actions;

use App\Containers\AppSection\Company\Models\Company;
use App\Containers\AppSection\Company\Tasks\FindCompanyByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindCompanyByIdAction extends Action
{
    public function run(Request $request): Company
    {
        return app(FindCompanyByIdTask::class)->run($request->id);
    }
}
