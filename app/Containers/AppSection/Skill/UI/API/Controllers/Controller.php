<?php

namespace App\Containers\AppSection\Skill\UI\API\Controllers;

use App\Containers\AppSection\Skill\UI\API\Requests\CreateSkillRequest;
use App\Containers\AppSection\Skill\UI\API\Requests\DeleteSkillRequest;
use App\Containers\AppSection\Skill\UI\API\Requests\GetAllSkillsRequest;
use App\Containers\AppSection\Skill\UI\API\Requests\FindSkillByIdRequest;
use App\Containers\AppSection\Skill\UI\API\Requests\UpdateSkillRequest;
use App\Containers\AppSection\Skill\UI\API\Transformers\SkillTransformer;
use App\Containers\AppSection\Skill\Actions\CreateSkillAction;
use App\Containers\AppSection\Skill\Actions\FindSkillByIdAction;
use App\Containers\AppSection\Skill\Actions\GetAllSkillsAction;
use App\Containers\AppSection\Skill\Actions\UpdateSkillAction;
use App\Containers\AppSection\Skill\Actions\DeleteSkillAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createSkill(CreateSkillRequest $request): JsonResponse
    {
        $skill = app(CreateSkillAction::class)->run($request);
        return $this->created($this->transform($skill, SkillTransformer::class));
    }

    public function findSkillById(FindSkillByIdRequest $request): array
    {
        $skill = app(FindSkillByIdAction::class)->run($request);
        return $this->transform($skill, SkillTransformer::class);
    }

    public function getAllSkills(GetAllSkillsRequest $request): array
    {
        $skills = app(GetAllSkillsAction::class)->run($request);
        return $this->transform($skills, SkillTransformer::class);
    }

    public function updateSkill(UpdateSkillRequest $request): array
    {
        $skill = app(UpdateSkillAction::class)->run($request);
        return $this->transform($skill, SkillTransformer::class);
    }

    public function deleteSkill(DeleteSkillRequest $request): JsonResponse
    {
        app(DeleteSkillAction::class)->run($request);
        return $this->noContent();
    }
}
