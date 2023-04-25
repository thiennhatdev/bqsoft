<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

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
}
