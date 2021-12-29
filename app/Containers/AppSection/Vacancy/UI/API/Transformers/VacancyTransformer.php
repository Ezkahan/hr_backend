<?php

namespace App\Containers\AppSection\Vacancy\UI\API\Transformers;

use App\Containers\AppSection\Vacancy\Models\Vacancy;
use App\Ship\Parents\Transformers\Transformer;

class VacancyTransformer extends Transformer
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

    public function transform(Vacancy $vacancy): array
    {
        $response = [
            'object' => $vacancy->getResourceKey(),
            'id' => $vacancy->getHashedKey(),
            'created_at' => $vacancy->created_at,
            'updated_at' => $vacancy->updated_at,
            'readable_created_at' => $vacancy->created_at->diffForHumans(),
            'readable_updated_at' => $vacancy->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $vacancy->id,
            // 'deleted_at' => $vacancy->deleted_at,
        ], $response);
    }
}
