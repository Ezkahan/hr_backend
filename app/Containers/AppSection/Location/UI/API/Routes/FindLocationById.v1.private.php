<?php

/**
 * @apiGroup           Location
 * @apiName            findLocationById
 *
 * @api                {GET} /v1/locations/:id Endpoint title here..
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

use App\Containers\AppSection\Location\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('locations/{id}', [Controller::class, 'findLocationById'])
    ->name('api_location_find_location_by_id')
    ->middleware(['auth:api']);

