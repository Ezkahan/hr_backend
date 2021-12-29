<?php

/**
 * @apiGroup           Vacancy
 * @apiName            getAllVacancies
 *
 * @api                {GET} /v1/vacancies Endpoint title here..
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

use App\Containers\AppSection\Vacancy\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('vacancies', [Controller::class, 'getAllVacancies'])
    ->name('api_vacancy_get_all_vacancies')
    ->middleware(['auth:api']);

