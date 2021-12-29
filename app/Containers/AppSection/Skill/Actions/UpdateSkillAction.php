<?php

namespace App\Containers\AppSection\Skill\Actions;

use App\Containers\AppSection\Skill\Models\Skill;
use App\Containers\AppSection\Skill\Tasks\UpdateSkillTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateSkillAction extends Action
{
    public function run(Request $request): Skill
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateSkillTask::class)->run($request->id, $data);
    }
}
