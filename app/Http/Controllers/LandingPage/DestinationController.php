<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Helpers\Utilities\Visitor;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::withCount('tours')->orderBy('total_visitor', 'DESC')->get();
        return view('landing-page.pages.destination.index', compact('destinations'));
    }
    
    public function detail($slug)
    {
        $data = Destination::where('slug', $slug)->first();
        abort_if(is_null($data), 404);

        $featuredTours = $data->featuredTours();
        $tours = $data->tours;

        // Record Visitor
        Visitor::recordVisitor($data);

        return view('landing-page.pages.destination.detail', compact('data', 'featuredTours', 'tours'));
    }
}
