<?php

namespace App\Containers\AppSection\Location\Actions;

use App\Containers\AppSection\Location\Tasks\DeleteLocationTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteLocationAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteLocationTask::class)->run($request->id);
    }
}
