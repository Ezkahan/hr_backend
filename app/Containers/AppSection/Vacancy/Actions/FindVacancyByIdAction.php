<?php

namespace App\Containers\AppSection\Vacancy\Actions;

use App\Containers\AppSection\Vacancy\Models\Vacancy;
use App\Containers\AppSection\Vacancy\Tasks\FindVacancyByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindVacancyByIdAction extends Action
{
    public function run(Request $request): Vacancy
    {
        return app(FindVacancyByIdTask::class)->run($request->id);
    }
}
