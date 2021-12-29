<?php

namespace App\Containers\AppSection\Skill\Actions;

use App\Containers\AppSection\Skill\Models\Skill;
use App\Containers\AppSection\Skill\Tasks\FindSkillByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindSkillByIdAction extends Action
{
    public function run(Request $request): Skill
    {
        return app(FindSkillByIdTask::class)->run($request->id);
    }
}
