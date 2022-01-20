<?php

namespace App\GraphQL\Mutations;

use App\Containers\AppSection\Skill\Tasks\CreateSkillTask;
use App\Containers\AppSection\Skill\Tasks\DeleteSkillTask;
use App\Containers\AppSection\Skill\Tasks\UpdateSkillTask;

class SkillMutator
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function store($root, array $args)
    {
        $data = [
            'name' => [
                'ru' => $args['name_ru'],
                'en' => $args['name_en'],
            ],
            'skill_type_id' => $args['skill_type_id'],
        ];

        $skill = app(CreateSkillTask::class)->run($data);

        return $skill;
    }


    public function update($root, array $args)
    {
        $data = [
            'name' => [
                'ru' => $args['name_ru'],
                'en' => $args['name_en'],
            ],
            'skill_type_id' => $args['skill_type_id'],
        ];

        $skill = app(UpdateSkillTask::class)->run($args['id'], $data);

        return $skill;
    }

    public function delete($root, array $args)
    {
        if ($args['id']) {
            app(DeleteSkillTask::class)->run($args['id']);

            return 'success deleted';
        }

        return 'error';
    }
}
