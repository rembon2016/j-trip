<?php

namespace App\Http\Controllers\Admin\Message;

use App\Models\TourInquiry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Helpers\Responses\JsonResponse;

class TourInquiryController extends Controller
{
    public function index()
    {
        $data = TourInquiry::latest()->get();
        return view("admin.pages.booking-tour.index", compact('data'));
    }

    public function detail(string $id)
    {
        $data = TourInquiry::where('id', $id)->first();
        if (is_null($data)) return JsonResponse::error(__('crud.not_found', ['name' => 'Customer Feedback']), Response::HTTP_NOT_FOUND);

        return view('admin.pages.booking-tour.detail', compact('data'));
    }
}
