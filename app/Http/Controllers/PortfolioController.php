<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function laynding()
    {
        return view('sites.landing');
    }
    public function about()
    {
        return view('sites.about');
    }
    public function portfolio()
    {
        return view('sites.portfolio');  
    }
    public function contactUs()
    {
        return view('sites.contact-us');
    }
    public function services()
    {
        return view('sites.services');
    }
    public function blogs()
    {
        return view('sites.blogs.index');
    }
    
}
