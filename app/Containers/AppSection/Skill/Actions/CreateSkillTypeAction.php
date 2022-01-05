<?php

namespace App\Containers\AppSection\Skill\Actions;

use App\Containers\AppSection\Skill\Models\SkillType;
use App\Containers\AppSection\Skill\Tasks\CreateSkillTypeTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateSkillTypeAction extends Action
{
    public function run(Request $request): SkillType
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateSkillTypeTask::class)->run($data);
    }
}
