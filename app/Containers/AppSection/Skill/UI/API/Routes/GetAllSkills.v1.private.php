<?php

/**
 * @apiGroup           Skill
 * @apiName            getAllSkills
 *
 * @api                {GET} /v1/skills Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Skill\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('skills', [Controller::class, 'getAllSkills'])
    ->name('api_skill_get_all_skills')
    ->middleware(['auth:api']);

