<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Blog;
use App\Models\Home;
use App\Models\About;
use App\Models\Gallery;
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
        $destinations = Destination::with('tours')->withCount('tours')->orderBy('total_visitor', 'DESC')->get();
        $home = Home::first();

        return view('landing-page.pages.home', compact('blogs', 'testimonials', 'destinations','home'));
    }

    public function about()
    {
        $about = About::first();
        $galleries = Gallery::latest()->get();;

        return view('landing-page.pages.about', compact('about', 'galleries'));
    }

    public function contact()
    {
        return view('landing-page.pages.contact');
    }
}
