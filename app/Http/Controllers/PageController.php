<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Repositories\ProjectRepository;
use App\Repositories\EmailRepository;

use Mail;

class PageController extends Controller
{
    public function __construct(Request $request, ProjectRepository $projectRepository, EmailRepository $emailRepository)
    {
        $this->request = $request;
        $this->projectRepository = $projectRepository;
        $this->emailRepository = $emailRepository;
    }

    public function homepage() 
    {
        $projects = $this->projectRepository->allProjects();
        
        return view('pages.homepage', [
            'mail_message' => null,
            'projects' => $projects,
        ]);
    }

    public function action_search() {
        // $this->request->session()->put('search', $this->request->input('input-search'));
        return redirect('tim-kiem/' . str_replace(' ', '-', $this->request->input('paint-name')) . '.html');
    }

    public function search()
    {
        // $results = $this->paintRepository->searchPaints($this->request->slug);
        // return view('pages.search', [
        //     'results' => $results
        // ]);
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
}
