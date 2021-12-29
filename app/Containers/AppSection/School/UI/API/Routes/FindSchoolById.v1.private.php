<?php

/**
 * @apiGroup           School
 * @apiName            findSchoolById
 *
 * @api                {GET} /v1/schools/:id Endpoint title here..
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

Route::get('schools/{id}', [Controller::class, 'findSchoolById'])
    ->name('api_school_find_school_by_id')
    ->middleware(['auth:api']);

