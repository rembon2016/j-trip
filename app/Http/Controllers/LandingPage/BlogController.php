<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('landing-page.pages.blog.index');
    }
    
    public function detail(string $id)
    {
        return view('landing-page.pages.blog.detail');
    }
}
