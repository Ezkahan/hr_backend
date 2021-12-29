<?php

namespace App\Containers\AppSection\School\UI\API\Transformers;

use App\Containers\AppSection\School\Models\School;
use App\Ship\Parents\Transformers\Transformer;

class SchoolTransformer extends Transformer
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

    public function transform(School $school): array
    {
        $response = [
            'object' => $school->getResourceKey(),
            'id' => $school->getHashedKey(),
            'created_at' => $school->created_at,
            'updated_at' => $school->updated_at,
            'readable_created_at' => $school->created_at->diffForHumans(),
            'readable_updated_at' => $school->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $school->id,
            // 'deleted_at' => $school->deleted_at,
        ], $response);
    }
}
