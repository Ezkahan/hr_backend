<?php

namespace App\GraphQL\Mutations;

use App\Containers\AppSection\Location\Tasks\CreateEducationTask;
use App\Containers\AppSection\Location\Tasks\UpdateEducationTask;
use App\Containers\AppSection\Location\Tasks\DeleteEducationTask;

class EducationMutator
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
            'description' => [
                'ru' => $args['description_ru'] ?? "",
                'en' => $args['description_en'] ?? "",
            ],
            'country_id' => $args['country_id'],
            'begin' => $args['begin'],
            'end' => $args['end'] ?? "",
            'education_type_id' => $args['education_type_id'] ?? "",
        ];

        $education = app(CreateEducationTask::class)->run($data);

        return $education;
    }


    public function update($root, array $args)
    {
        $data = [
            'name' => [
                'ru' => $args['name_ru'],
                'en' => $args['name_en'],
            ],
            'country_id' => $args['country_id'],
        ];

        $education = app(UpdateEducationTask::class)->run($args['id'], $data);

        return $education;
    }

    public function delete($root, array $args)
    {
        if ($args['id']) {
            app(DeleteEducationTask::class)->run($args['id']);

            return 'success deleted';
        }

        return 'error';
    }
}
