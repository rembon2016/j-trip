<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function detail($slug)
    {
        $data = Tour::where('slug', $slug)->first();
        abort_if(is_null($data), 404);

        return view('landing-page.pages.tour.detail', compact('data'));
    }
}
