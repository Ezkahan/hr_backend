<?php

namespace App\GraphQL\Mutations;

use App\Containers\AppSection\School\Tasks\CreateSchoolTask;
use App\Containers\AppSection\School\Tasks\DeleteSchoolTask;
use App\Containers\AppSection\School\Tasks\UpdateSchoolTask;

class SchoolMutator
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
            'school_type_id' => $args['school_type_id'],
        ];

        $town = app(CreateSchoolTask::class)->run($data);

        return $town;
    }


    public function update($root, array $args)
    {
        $data = [
            'name' => [
                'ru' => $args['name_ru'],
                'en' => $args['name_en'],
            ],
            'school_type_id' => $args['school_type_id'],
        ];

        $country = app(UpdateSchoolTask::class)->run($args['id'], $data);

        return $country;
    }

    public function delete($root, array $args)
    {
        if ($args['id']) {
            app(DeleteSchoolTask::class)->run($args['id']);

            return 'success deleted';
        }

        return 'error';
    }
}
