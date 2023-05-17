<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Services\Listings\Columns\PublishStatus;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\Columns\Boolean;
use A17\Twill\Services\Listings\Columns\ScheduledStatus;

use A17\Twill\Services\Listings\TableColumns;
use Mail;

class NewsController extends BaseModuleController
{
    protected $moduleName = 'news';

    protected $indexOptions = [
    ];

    protected function getIndexTableColumns($items = null): TableColumns
    {
        $table = parent::getIndexTableColumns();
 
        $after = $table->splice(2);
    
        $table->push(
            Text::make()->field('description')
        );
    
        return $table->merge($after);
    }
}
