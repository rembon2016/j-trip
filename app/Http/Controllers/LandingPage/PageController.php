<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        $blogs = Blog::limit(5)->latest()->get();
        return view('landing-page.pages.home', compact('blogs'));
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
