<?php

namespace App\Containers\AppSection\Vacancy\Actions;

use App\Containers\AppSection\Vacancy\Tasks\GetAllVacanciesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllVacanciesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllVacanciesTask::class)->addRequestCriteria()->run();
    }
}
