<?php

/**
 * @apiGroup           Vacancy
 * @apiName            findVacancyById
 *
 * @api                {GET} /v1/vacancies/:id Endpoint title here..
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

Route::get('vacancies/{id}', [Controller::class, 'findVacancyById'])
    ->name('api_vacancy_find_vacancy_by_id')
    ->middleware(['auth:api']);

