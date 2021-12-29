<?php

/**
 * @apiGroup           Education
 * @apiName            updateEducation
 *
 * @api                {PATCH} /v1/education/:id Endpoint title here..
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

Route::patch('education/{id}', [Controller::class, 'updateEducation'])
    ->name('api_education_update_education')
    ->middleware(['auth:api']);

