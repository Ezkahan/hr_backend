<?php

/**
 * @apiGroup           Company
 * @apiName            createCompany
 *
 * @api                {POST} /v1/companies Endpoint title here..
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

use App\Containers\AppSection\Company\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('companies', [Controller::class, 'createCompany'])
    ->name('api_company_create_company')
    ->middleware(['auth:api']);
