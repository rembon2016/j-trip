<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Tour;
use App\Models\TourInquiry;
use Illuminate\Http\Request;
use App\Helpers\Utilities\Visitor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tour\StoreTourInquiryRequest;

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

        // Record Visitor
        Visitor::recordVisitor($data);

        return view('landing-page.pages.tour.detail', compact('data'));
    }

    public function store(StoreTourInquiryRequest $request, string $tour_id) 
    {
        $requestDTO = $request->validated();
        
        try {
            $existsTour = Tour::where('id', $tour_id)->exists();
            if (!$existsTour) return redirect()->back()->with('toastError', 'Data Booking Tidak Valid!');
            
            $requestDTO['client_ip_address'] = $request->getClientIp();
            $requestDTO['tour_id'] = $tour_id;

            TourInquiry::create($requestDTO);
            
            return redirect()->back()->with('toastSuccess', 'Data Booking Berhasil Disimpan, Terima Kasih!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('toastError', 'Data Booking Gagal Disimpan!');
        }
    }
}
