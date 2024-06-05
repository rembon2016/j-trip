<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('landing-page.pages.home');
    }

    public function about()
    {
        return view('landing-page.pages.about');
    }

    public function contact()
    {
        return view('landing-page.pages.contact');
    }
}
