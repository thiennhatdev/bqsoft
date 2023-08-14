<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class CourseUserController extends BaseModuleController
{
    protected $moduleName = 'courseUsers';
    protected $titleColumnKey = 'phoneOrEmail';

    protected $indexColumns = [
        'phoneOrEmail' => [
            'title' => 'Phone or email',
            'field' => 'phoneOrEmail',
        ],
    ];

    protected $indexOptions = [
        'permalink' => false,
    ];
}
