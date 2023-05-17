<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Repositories\ProjectRepository;
use App\Repositories\EmailRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\ReviewRepository;
use App\Repositories\ContactRepository;
use App\Repositories\NewsRepository;

use Mail;

class PageController extends Controller
{
    public function __construct(
        Request $request, 
        ProjectRepository $projectRepository, 
        EmailRepository $emailRepository,
        ServiceRepository $serviceRepository,
        ReviewRepository $reviewRepository,
        ContactRepository $contactRepository,
        NewsRepository $newsRepository
    )
    {
        $this->request = $request;
        $this->projectRepository = $projectRepository;
        $this->emailRepository = $emailRepository;
        $this->serviceRepository = $serviceRepository;
        $this->reviewRepository = $reviewRepository;
        $this->contactRepository = $contactRepository;
        $this->newsRepository = $newsRepository;
    }

    public function homepage() 
    {
        $projects = $this->projectRepository->allProjects();
        $services = $this->serviceRepository->allServices();
        $reviews = $this->reviewRepository->allReviews();
        return view('pages.homepage', [
            'mail_message' => null,
            'projects' => $projects,
            'services' => $services,
            'reviews' => $reviews,
        ]);
    }

    public function action_search() {
        // $this->request->session()->put('search', $this->request->input('input-search'));
        return redirect('tim-kiem/' . str_replace(' ', '-', $this->request->input('input-search')) . '.html');
    }

    public function search()
    {
        $results = $this->newsRepository->searchNews($this->request->slug);
        return view('pages.search', [
            'results' => $results
        ]);
    }

    public function notfound()
    {
        return view('pages.404', [
            
        ]);
    }

    public function saveMail(Request $request)
    {
        $mail_message = $this->emailRepository->saveMailToDatabase($request->email);
        return redirect()->back()->with('mail_message', $mail_message);
    }

    public function sendContact(Request $request)
    {
        $contact_message = $this->contactRepository->contactFromClient($request);
        return redirect()->back()->with('contact_message', $contact_message);
    }
}
