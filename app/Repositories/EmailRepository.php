<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Email;

class EmailRepository extends ModuleRepository
{
    use HandleBlocks, HandleFiles, HandleRevisions;

    public function __construct(Email $model)
    {
        $this->model = $model;
    }
}
