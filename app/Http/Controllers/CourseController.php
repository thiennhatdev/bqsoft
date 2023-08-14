<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CourseUserRepository;

class CourseController extends Controller
{
    public function __construct(
        Request $request, 
        CourseUserRepository $courseUserRepository,
        
    )
    {
        $this->request = $request;
        $this->courseUserRepository = $courseUserRepository;
        
    }

    public function index() 
    {
        return view('pages.courses', [
            'courses' => []
        ]);
    }

    public function frontend() 
    {
        return view('pages.course-frontend', [
            'courses' => []
        ]);
    }

    public function backend() 
    {
        return view('pages.course-backend', [
            'courses' => []
        ]);
    }

    public function fullstack() 
    {
        return view('pages.course-fullstack', [
            'courses' => []
        ]);
    }

    public function reactnative() 
    {
        return view('pages.course-reactnative', [
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
