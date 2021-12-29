<?php

namespace App\Containers\AppSection\Company\Actions;

use App\Containers\AppSection\Company\Tasks\GetAllCompaniesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllCompaniesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllCompaniesTask::class)->addRequestCriteria()->run();
    }
}
