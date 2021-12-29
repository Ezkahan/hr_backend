<?php

/**
 * @apiGroup           People
 * @apiName            findPeopleById
 *
 * @api                {GET} /v1/people/:id Endpoint title here..
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

use App\Containers\AppSection\People\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('people/{id}', [Controller::class, 'findPeopleById'])
    ->name('api_people_find_people_by_id')
    ->middleware(['auth:api']);

