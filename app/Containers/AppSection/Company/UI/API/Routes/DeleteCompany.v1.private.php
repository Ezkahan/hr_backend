<?php

/**
 * @apiGroup           Company
 * @apiName            deleteCompany
 *
 * @api                {DELETE} /v1/companies/:id Endpoint title here..
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

Route::delete('companies/{id}', [Controller::class, 'deleteCompany'])
    ->name('api_company_delete_company')
    ->middleware(['auth:api']);

