<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Review;

class ReviewRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Review $model)
    {
        $this->model = $model;
    }

    public function allReviews() 
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
