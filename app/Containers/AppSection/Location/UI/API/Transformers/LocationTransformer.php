<?php

namespace App\Containers\AppSection\Location\UI\API\Transformers;

use App\Containers\AppSection\Location\Models\Location;
use App\Ship\Parents\Transformers\Transformer;

class LocationTransformer extends Transformer
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

    public function transform(Location $location): array
    {
        $response = [
            'object' => $location->getResourceKey(),
            'id' => $location->getHashedKey(),
            'created_at' => $location->created_at,
            'updated_at' => $location->updated_at,
            'readable_created_at' => $location->created_at->diffForHumans(),
            'readable_updated_at' => $location->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $location->id,
            // 'deleted_at' => $location->deleted_at,
        ], $response);
    }
}
