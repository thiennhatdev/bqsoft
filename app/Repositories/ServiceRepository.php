<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Service;

class ServiceRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Service $model)
    {
        $this->model = $model;
    }

    public function allServices() 
    {
        $isExist = $this->model->exists();
        if($isExist)
        {
            return $this->model
            ->published()
            ->get();
        }
        else
        {
            return [];
        }
    }
}
