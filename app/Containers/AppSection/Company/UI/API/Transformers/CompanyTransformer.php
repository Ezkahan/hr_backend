<?php

namespace App\Containers\AppSection\Company\UI\API\Transformers;

use App\Containers\AppSection\Company\Models\Company;
use App\Ship\Parents\Transformers\Transformer;

class CompanyTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Company $company): array
    {
        $response = [
            'object' => $company->getResourceKey(),
            'id' => $company->getHashedKey(),
            'created_at' => $company->created_at,
            'updated_at' => $company->updated_at,
            'readable_created_at' => $company->created_at->diffForHumans(),
            'readable_updated_at' => $company->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $company->id,
            // 'deleted_at' => $company->deleted_at,
        ], $response);
    }
}
