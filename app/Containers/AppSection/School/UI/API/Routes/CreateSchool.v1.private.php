<?php

/**
 * @apiGroup           School
 * @apiName            createSchool
 *
 * @api                {POST} /v1/schools Endpoint title here..
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

use App\Containers\AppSection\School\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('schools', [Controller::class, 'createSchool'])
    ->name('api_school_create_school')
    ->middleware(['auth:api']);

