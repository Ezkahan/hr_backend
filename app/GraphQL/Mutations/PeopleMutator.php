<?php

namespace App\GraphQL\Mutations;

use App\Containers\AppSection\People\Tasks\CreatePeopleTask;
use App\Containers\AppSection\People\Tasks\UpdatePeopleTask;
use App\Containers\AppSection\People\Tasks\DeletePeopleTask;

class PeopleMutator
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
            'firstname' => $args['firstname'],
            'lastname' => $args['lastname'],
            'patronymic' => $args['patronymic'],
            'description' => [
                'ru' => $args['description_ru'],
                'en' => $args['description_en'],
            ],
            'born_date' => $args['born_date'],
        ];

        $person = app(CreatePeopleTask::class)->run($data);

        return $person;
    }


    public function update($root, array $args)
    {
        $data = [
            'name' => [
                'ru' => $args['name_ru'],
                'en' => $args['name_en'],
            ],
            'area_id' => $args['area_id'],
        ];

        $person = app(UpdatePeopleTask::class)->run($args['id'], $data);

        return $person;
    }

    public function delete($root, array $args)
    {
        if ($args['id']) {
            app(DeletePeopleTask::class)->run($args['id']);

            return 'success deleted';
        }

        return 'error';
    }
}
