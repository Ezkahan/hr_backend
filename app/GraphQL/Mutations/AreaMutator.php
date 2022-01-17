<?php

namespace App\GraphQL\Mutations;

use App\Containers\AppSection\Location\Tasks\CreateAreaTask;
use App\Containers\AppSection\Location\Tasks\UpdateAreaTask;
use App\Containers\AppSection\Location\Tasks\DeleteAreaTask;

class AreaMutator
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
            'country_id' => $args['country_id'],
        ];

        $town = app(CreateAreaTask::class)->run($data);

        return $town;
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

        $country = app(UpdateAreaTask::class)->run($args['id'], $data);

        return $country;
    }

    public function delete($root, array $args)
    {
        if ($args['id']) {
            app(DeleteAreaTask::class)->run($args['id']);

            return 'success deleted';
        }

        return 'error';
    }
}
