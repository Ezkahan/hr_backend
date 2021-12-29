<?php

/**
 * @apiGroup           Education
 * @apiName            findEducationById
 *
 * @api                {GET} /v1/education/:id Endpoint title here..
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

use App\Containers\AppSection\Education\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('education/{id}', [Controller::class, 'findEducationById'])
    ->name('api_education_find_education_by_id')
    ->middleware(['auth:api']);

