<?php

namespace App\Containers\AppSection\Skill\Actions;

use App\Containers\AppSection\Skill\Tasks\GetAllSkillsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllSkillsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllSkillsTask::class)->addRequestCriteria()->run();
    }
}
