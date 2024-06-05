<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function detail($id)
    {
        return view('landing-page.pages.tour.detail');
    }
}
