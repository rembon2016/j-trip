<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Blog;
use App\Models\Destination;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        $blogs = Blog::limit(5)->latest()->get();
        $testimonials = Testimonial::latest()->get();
        $destinations = Destination::withCount('tours')->orderBy('total_visitor', 'DESC')->get();

        return view('landing-page.pages.home', compact('blogs', 'testimonials', 'destinations'));
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
