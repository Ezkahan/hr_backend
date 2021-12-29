<?php

namespace App\Containers\AppSection\Vacancy\Actions;

use App\Containers\AppSection\Vacancy\Models\Vacancy;
use App\Containers\AppSection\Vacancy\Tasks\CreateVacancyTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateVacancyAction extends Action
{
    public function run(Request $request): Vacancy
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateVacancyTask::class)->run($data);
    }
}
