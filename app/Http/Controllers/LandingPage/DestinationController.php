<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::withCount('tours')->orderBy('total_visitor', 'DESC')->get();
        return view('landing-page.pages.destination.index', compact('destinations'));
    }
    
    public function detail($id)
    {
        return view('landing-page.pages.destination.detail');
    }
}
