<?php

namespace App\GraphQL\Queries;

use App\Containers\AppSection\Company\Models\Company;

class CompanyQuery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // return Company::query()->paginate('page', $args['page']);
    }
}
