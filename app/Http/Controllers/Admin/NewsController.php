<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;

class NewsController extends BaseModuleController
{
    protected $moduleName = 'news';

    protected $indexOptions = [
    ];

    protected function formData($request)
    {
        // dd('33');
        return [];
    }

    protected function getIndexTableColumns($items): TableColumns
    {
        $columns = new TableColumns();
    
        $columns->add(
            Text::make()
                ->field('title')
                ->title(twillTrans('Title'))
        );
    }
}
