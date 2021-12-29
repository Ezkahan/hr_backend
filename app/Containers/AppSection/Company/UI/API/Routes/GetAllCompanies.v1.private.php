<?php

/**
 * @apiGroup           Company
 * @apiName            getAllCompanies
 *
 * @api                {GET} /v1/companies Endpoint title here..
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

Route::get('companies', [Controller::class, 'getAllCompanies'])
    ->name('api_company_get_all_companies')
    ->middleware(['auth:api']);

