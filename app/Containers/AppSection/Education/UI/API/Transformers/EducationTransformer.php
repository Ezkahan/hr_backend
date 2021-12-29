<?php

namespace App\Containers\AppSection\Education\UI\API\Transformers;

use App\Containers\AppSection\Education\Models\Education;
use App\Ship\Parents\Transformers\Transformer;

class EducationTransformer extends Transformer
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

    public function transform(Education $education): array
    {
        $response = [
            'object' => $education->getResourceKey(),
            'id' => $education->getHashedKey(),
            'created_at' => $education->created_at,
            'updated_at' => $education->updated_at,
            'readable_created_at' => $education->created_at->diffForHumans(),
            'readable_updated_at' => $education->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $education->id,
            // 'deleted_at' => $education->deleted_at,
        ], $response);
    }
}
