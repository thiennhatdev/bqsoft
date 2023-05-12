<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Repositories\ProjectRepository;
use Mail;

class PageController extends Controller
{
    public function __construct(Request $request, ProjectRepository $projectRepository)
    {
        $this->request = $request;
        $this->projectRepository = $projectRepository;
    }

    public function homepage() 
    {
        $projects = $this->projectRepository->allProjects();
        
        return view('pages.homepage', [
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
        // $input = $request->all();
        // Mail::send('pages.mail', array('email'=>$input["email"]), function($message){
	    //     $message->to('vhtn1993@gmail.com', 'Visitor')->subject('Visitor Feedback!');
	    // });
        // echo "Successfully sent the email";
        // Session::flash('flash_message', 'Send message successfully!');
    }
}
