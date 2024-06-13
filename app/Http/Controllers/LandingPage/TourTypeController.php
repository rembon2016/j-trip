<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\TourType;
use Illuminate\Http\Request;
use App\Helpers\Utilities\Visitor;
use App\Http\Controllers\Controller;

class TourTypeController extends Controller
{
    public function index()
    {
        $tourTypes = TourType::withCount('tours')->orderBy('total_visitor', 'DESC')->get();
        return view('landing-page.pages.tour-type.index', compact('tourTypes'));
    }
    
    public function detail($slug)
    {
        $data = TourType::where('slug', $slug)->first();
        abort_if(is_null($data), 404);

        $featuredTours = $data->featuredTours();
        $tours = $data->tours;
        
        // Record Visitor
        Visitor::recordVisitor($data);

        return view('landing-page.pages.tour-type.detail', compact('data', 'featuredTours', 'tours'));
    }
}
