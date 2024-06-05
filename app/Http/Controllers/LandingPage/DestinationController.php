<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        return view('landing-page.pages.destination.index');
    }
    
    public function detail($id)
    {
        return view('landing-page.pages.destination.detail');
    }
}
