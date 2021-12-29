<?php

namespace App\Containers\AppSection\Skill\Actions;

use App\Containers\AppSection\Skill\Tasks\DeleteSkillTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteSkillAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteSkillTask::class)->run($request->id);
    }
}
