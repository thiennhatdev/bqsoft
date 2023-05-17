<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class TeamMemberController extends BaseModuleController
{
    protected $moduleName = 'teamMembers';
    protected $titleColumnKey = 'name';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);
        
        $form->add(
            Medias::make()
                ->name('avatar')
                ->label(twillTrans('Avatar'))
        );
        $form->add(
            Input::make()->name('name')->label('Tên')
        );
        $form->add(
            Input::make()->name('description')->label('Mô tả')
        );
        $form->add(
            Input::make()->name('career_title')->label('Chức danh')
        );
        $form->add(
            Input::make()->name('fb_link')->label('Facebook')
        );
        $form->add(
            Input::make()->name('twitter_link')->label('Twitter')
        );
        $form->add(
            Input::make()->name('instagram_link')->label('Instagram')
        );
        $form->add(
            Input::make()->name('linked_link')->label('Linkedin')
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        return $table;
    }
}
