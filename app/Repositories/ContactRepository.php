<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Contact;

class ContactRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleFiles, HandleRevisions;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    public function contactFromClient($request)
    {
        $this->model->create([
            'username' => $request->username,
            'email' => $request->email,
            'price' => $request->price,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return "Gửi liên hệ thành công!";
    }
}
