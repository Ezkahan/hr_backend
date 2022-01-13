<?php

namespace App\GraphQL\Mutations;

use App\Containers\AppSection\Location\Tasks\CreateCountryTask;
use App\Containers\AppSection\Location\Tasks\DeleteCountryTask;
use App\Containers\AppSection\Location\Tasks\UpdateCountryTask;

class CountryMutator
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
        ];

        $country = app(CreateCountryTask::class)->run($data);

        return $country;
    }


    public function update($root, array $args)
    {
        $data = [
            'name' => [
                'ru' => $args['name_ru'],
                'en' => $args['name_en'],
            ],
        ];

        $country = app(UpdateCountryTask::class)->run($args['id'], $data);

        return $country;
    }

    public function delete($root, array $args)
    {
        if ($args['id']) {
            app(DeleteCountryTask::class)->run($args['id']);

            return 'success deleted';
        }

        return 'error';
    }
}
