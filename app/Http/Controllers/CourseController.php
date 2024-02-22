<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CourseUserRepository;
use App\Repositories\NewsRepository;

class CourseController extends Controller
{
    public function __construct(
        Request $request, 
        CourseUserRepository $courseUserRepository,
        NewsRepository $newsRepository
    )
    {
        $this->request = $request;
        $this->courseUserRepository = $courseUserRepository;
        $this->newsRepository = $newsRepository;
        
    }

    public function index() 
    {
        return view('pages.courses', [
            'courses' => []
        ]);
    }

    public function frontend() 
    {
        $recent_news = $this->newsRepository->recentNews($this->request->id);

        return view('pages.course-frontend', [
            'recent_news' => $recent_news,
            'courses' => []
        ]);
    }

    public function backend() 
    {
        $recent_news = $this->newsRepository->recentNews($this->request->id);

        return view('pages.course-backend', [
            'recent_news' => $recent_news,
            'courses' => []
        ]);
    }

    public function fullstack() 
    {
        $recent_news = $this->newsRepository->recentNews($this->request->id);

        return view('pages.course-fullstack', [
            'recent_news' => $recent_news,
            'courses' => []
        ]);
    }

    public function reactnative() 
    {
        $recent_news = $this->newsRepository->recentNews($this->request->id);

        return view('pages.course-reactnative', [
            'recent_news' => $recent_news,
            'courses' => []
        ]);
    }

    public function signup() 
    {
        return view('pages.course-signup', [
            'courses' => []
        ]);
    }

    public function actionSignup() 
    {
        $body = [
            'phoneOrEmail' => $this->request->phoneOrEmail,
            'courseName' =>  $this->request->query('course')

        ];
        $course_signup_message = $this->courseUserRepository->signupCourse($body);
        return redirect()->back()->with('course_signup_message', $course_signup_message);
    }
}
