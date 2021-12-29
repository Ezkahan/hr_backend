<?php

namespace App\Containers\AppSection\Company\Actions;

use App\Containers\AppSection\Company\Tasks\DeleteCompanyTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteCompanyAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteCompanyTask::class)->run($request->id);
    }
}
