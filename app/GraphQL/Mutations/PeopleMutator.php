<?php

namespace App\GraphQL\Mutations;

use App\Containers\AppSection\People\Tasks\CreatePeopleTask;
use App\Containers\AppSection\People\Tasks\UpdatePeopleTask;
use App\Containers\AppSection\People\Tasks\DeletePeopleTask;
use App\Containers\AppSection\People\Tasks\AddPeopleSkillTask;

class PeopleMutator
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function store($root, array $args)
    {
        $data = [
            'firstname' => $args['firstname'],
            'lastname' => $args['lastname'],
            'patronymic' => $args['patronymic'],
            'description' => [
                'ru' => $args['description_ru'],
                'en' => $args['description_en'],
            ],
            'born_date' => $args['born_date'],
        ];

        $person = app(CreatePeopleTask::class)->run($data);

        return $person;
    }


    public function update($root, array $args)
    {
        $data = [
            'firstname' => $args['firstname'],
            'lastname' => $args['lastname'],
            'patronymic' => $args['patronymic'] ?? null,
            'description' => [
                'ru' => $args['description_ru'] ?? "",
                'en' => $args['description_en'] ?? "",
            ],
            'born_date' => $args['born_date'] ?? null,
            'nationality_id' => $args['nationality_id'] ?? 1,
            'passport_series_id' => $args['passport_series_id'] ?? 1,
            'passport_no' => $args['passport_no'] ?? null,
            'passport_issue_date' => $args['passport_issue_date'],
            'passport_issued_by_id' => $args['passport_issued_by_id'] ?? null,
            'passport_comment' => $args['passport_comment'],
            'gender' => $args['gender'],
            'marital' => $args['marital'],
            'children' => $args['children'] ?? "",
            'military' => $args['military'],
            'sentence' => $args['sentence'],
            'dead' => $args['dead'],
            'relocation' => $args['relocation'],
            'shift' => $args['shift'],
            'dontdisturb' => $args['dontdisturb'],
            'dontdisturb_notes' => $args['dontdisturb_notes'],
            'vip' => $args['vip'],
            'vip_notes' => $args['vip_notes'],
            'blacklist' => $args['blacklist'],
            'blacklist_notes' => $args['blacklist_notes'],
            'min_salary' => $args['min_salary'],
            'salary_currency' => $args['salary_currency'],
        ];

        $person = app(UpdatePeopleTask::class)->run($args['id'], $data);

        return $person;
    }

    public function delete($root, array $args)
    {
        if ($args['id']) {
            app(DeletePeopleTask::class)->run($args['id']);

            return 'success deleted';
        }

        return 'error';
    }

    public function addSkill($root, array $args)
    {
        $peopleSkill = app(AddPeopleSkillTask::class)->run($args['people_id'], $args['skill_id'], $args['level']);

        return $peopleSkill;
    }
}
