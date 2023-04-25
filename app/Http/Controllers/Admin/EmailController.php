<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class EmailController extends BaseModuleController
{
    protected $moduleName = 'emails';
    protected $titleColumnKey = 'customer_email';

    protected $indexColumns = [
        'customer_email' => [
            'title' => 'Email',
            'field' => 'customer_email',
        ],
    ];

    protected $indexOptions = [
        'permalink' => false,
    ];
}
