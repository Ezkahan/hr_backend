<?php

/**
 * @apiGroup           People
 * @apiName            deletePeople
 *
 * @api                {DELETE} /v1/people/:id Endpoint title here..
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

Route::delete('people/{id}', [Controller::class, 'deletePeople'])
    ->name('api_people_delete_people')
    ->middleware(['auth:api']);

