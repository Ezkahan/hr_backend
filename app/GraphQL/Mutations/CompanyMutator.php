<?php

namespace App\GraphQL\Mutations;

use App\Containers\AppSection\Company\Tasks\CreateCompanyTask;

class CompanyMutator
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function create($root, array $args)
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
            'company_type_id' => $args['company_type_id'],
            'phone' => $args['phone'] ?? "",
            'fax' => $args['fax'] ?? "",
            'email' => $args['email'] ?? "",
            'website' => $args['website'] ?? "",
        ];

        $company = app(CreateCompanyTask::class)->run($data);

        return $company;
    }
}
