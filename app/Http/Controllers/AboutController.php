<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AboutRepository;
use App\Repositories\TeamMemberRepository;

class AboutController extends Controller
{
    public function __construct(
        AboutRepository $aboutRepository,
        TeamMemberRepository $teamMemberRepository
    )
    {
        $this->aboutRepository = $aboutRepository;
        $this->teamMemberRepository = $teamMemberRepository;
    }

    public function index() 
    {
        return view('pages.about', [
            'abouts' => $this->aboutRepository->index() ?? $this->aboutRepository->index()[0],
            'members' => $this->teamMemberRepository->allMembers()
        ]);
    }
}
