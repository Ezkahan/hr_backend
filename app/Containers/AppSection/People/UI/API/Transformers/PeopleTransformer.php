<?php

namespace App\Containers\AppSection\People\UI\API\Transformers;

use App\Containers\AppSection\People\Models\People;
use App\Ship\Parents\Transformers\Transformer;

class PeopleTransformer extends Transformer
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

    public function transform(People $people): array
    {
        $response = [
            'object' => $people->getResourceKey(),
            'id' => $people->getHashedKey(),
            'created_at' => $people->created_at,
            'updated_at' => $people->updated_at,
            'readable_created_at' => $people->created_at->diffForHumans(),
            'readable_updated_at' => $people->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $people->id,
            // 'deleted_at' => $people->deleted_at,
        ], $response);
    }
}
