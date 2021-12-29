<?php

namespace App\Containers\AppSection\Skill\UI\API\Transformers;

use App\Containers\AppSection\Skill\Models\Skill;
use App\Ship\Parents\Transformers\Transformer;

class SkillTransformer extends Transformer
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

    public function transform(Skill $skill): array
    {
        $response = [
            'object' => $skill->getResourceKey(),
            'id' => $skill->getHashedKey(),
            'created_at' => $skill->created_at,
            'updated_at' => $skill->updated_at,
            'readable_created_at' => $skill->created_at->diffForHumans(),
            'readable_updated_at' => $skill->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $skill->id,
            // 'deleted_at' => $skill->deleted_at,
        ], $response);
    }
}
