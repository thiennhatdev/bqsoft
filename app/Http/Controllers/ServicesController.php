<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ServiceRepository;

class ServicesController extends Controller
{
    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function index() 
    {
        return view('pages.services-detail', [
            'services-detail' => []
        ]);
    }

}
