<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\CourseUser;

class CourseUserRepository extends ModuleRepository
{
    use HandleMedias, HandleRevisions;

    public function __construct(CourseUser $model)
    {
        $this->model = $model;
    }

    public function signupCourse($body)
    {
        $courseName;
        switch ($body['courseName']) {
            case 1:
                $courseName = 'Khoá học Frontend';
                break;
            case 2:
                $courseName = 'Khoá học Backend';
                break;
            case 3:
                $courseName = 'Khoá học Fullstack';
                break;
            case 4:
                $courseName = 'Khoá học Mobile (React native)';
                break;
            
            default:
                break;
        }
        $this->model->create([
            'courseName' => $courseName,
            'phoneOrEmail' => $body['phoneOrEmail'],
            'published' => 1
        ]);
        return "Đăng ký thành công! Chúng tôi sẽ liên hệ với bạn chậm nhất trong vòng 24h!";
    }
}
