<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Helpers\Utilities\Visitor;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $popularBlogs = Blog::limit(3)->orderBy('total_visitor', 'DESC')->get();
        $recentBlogs = Blog::latest()->paginate(1);

        return view('landing-page.pages.blog.index', compact('popularBlogs', 'recentBlogs'));
    }
    
    public function detail(string $slug)
    {
        $data = Blog::with('tour')->where('slug', $slug)->first();
        abort_if(is_null($data), 404);

        $blogs = Blog::where('slug', '!=', $slug)->limit(5)->orderBy('total_visitor', 'DESC')->get();
        
        // Record Visitor
        Visitor::recordVisitor($data);

        return view('landing-page.pages.blog.detail', compact('data', 'blogs'));
    }
}
