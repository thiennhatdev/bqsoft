<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Models\Contracts\TwillModelContract;
use App\Repositories\EmailRepository;
use App\Models\News;
use Mail;
use DB;

class NewsRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(News $model, EmailRepository $emailRepository)
    {
        $this->model = $model;
        $this->emailRepository = $emailRepository;
    }

    public function allNews()
    {
        $isExist = $this->model->exists();
        if($isExist) 
        {
            $allNews = $this->model
                ->published() 
                ->get()
                ->toQuery()
                ->paginate(10);  
            return $allNews;
        }
        else 
        {
            return [];
        }
        
    }

    public function newsDetail($id)
    {
        $news = News::where('id', $id)
            ->published() 
            ->first();
        return $news;
    }

    public function recentNews($news_id)
    {
        $recent_news = $this->model
            ->where('news.id', '!=', $news_id)
            ->published() 
            ->get()
            ->take(5);
        return $recent_news;
    }

    // public function prepareFieldsBeforeCreate(array $fields): array
    // {
    //     return parent::prepareFieldsBeforeCreate($fields);
    // }

    public function afterSave(TwillModelContract $model, array $fields): void {
        // parent::afterSave($model, $fields) phải được chạy trước send mail
        parent::afterSave($model, $fields);    
        $this->sendMailToCustomer($fields, $model);
    }

    public function sendMailToCustomer($fields, $model)
    {
        $arr = [
            'isSentMail' => true,
            'isHaveSendMail' => true
        ];

        if(!$model->isSentMail && ($fields['isHaveSendMail'] ?? null))
        {
            
            DB::table('news')->where("id", $model->id)->update($arr);
            $newsDetail = News::where('id', $model->id)
            ->first();
            $this->actionSendMail($newsDetail);
        }
    }

    public function actionSendMail($newsDetail)
    {
        $allCustomerEmail = $this->emailRepository
            ->published()
            ->get();

        foreach($allCustomerEmail as $item) {
            Mail::send('pages.mail', array(
                'title'=>$newsDetail->title,
                'content' => $newsDetail
            ), function($message) use ($newsDetail, $item){
                $message->to($item->customer_email, 'Visitor')->subject($newsDetail->title);
            });
        }    
        
    }
   
}
