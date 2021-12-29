<?php

/**
 * @apiGroup           Education
 * @apiName            getAllEducation
 *
 * @api                {GET} /v1/education Endpoint title here..
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

Route::get('education', [Controller::class, 'getAllEducation'])
    ->name('api_education_get_all_education')
    ->middleware(['auth:api']);

