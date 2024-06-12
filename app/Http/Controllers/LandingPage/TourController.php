<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index()
    {
        $data = Tour::orderBy('is_featured', 'DESC')->orderBy('featured_at', 'DESC')->paginate(6);
        return view('landing-page.pages.tour.index', compact('data'));
    }

    public function detail($slug)
    {
        $data = Tour::where('slug', $slug)->first();
        abort_if(is_null($data), 404);

        return view('landing-page.pages.tour.detail', compact('data'));
    }
}
