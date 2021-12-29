<?php

namespace App\Containers\AppSection\Vacancy\Actions;

use App\Containers\AppSection\Vacancy\Tasks\DeleteVacancyTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteVacancyAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteVacancyTask::class)->run($request->id);
    }
}
