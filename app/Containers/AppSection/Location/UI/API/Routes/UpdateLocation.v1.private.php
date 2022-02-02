<?php

/**
 * @apiGroup           Location
 * @apiName            updateLocation
 *
 * @api                {PATCH} /v1/location/:id Endpoint title here..
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

Route::patch('location/{id}', [Controller::class, 'updateLocation'])
  ->name('api_location_update_location')
  ->middleware(['auth:api']);
