<?php

namespace App\Containers\AppSection\Vacancy\Actions;

use App\Containers\AppSection\Vacancy\Models\Vacancy;
use App\Containers\AppSection\Vacancy\Tasks\UpdateVacancyTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateVacancyAction extends Action
{
    public function run(Request $request): Vacancy
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateVacancyTask::class)->run($request->id, $data);
    }
}
