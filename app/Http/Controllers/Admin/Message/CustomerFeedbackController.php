<?php

namespace App\Http\Controllers\Admin\Message;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CustomerFeedback;
use App\Http\Controllers\Controller;
use App\Helpers\Responses\JsonResponse;

class CustomerFeedbackController extends Controller
{
    public function index()
    {
        $data = CustomerFeedback::latest()->get();
        return view('admin.pages.customer-feedback.index', compact('data'));
    }

    public function detail(string $id)
    {
        $data = CustomerFeedback::where('id', $id)->first();
        if (is_null($data)) return JsonResponse::error(__('crud.not_found', ['name' => 'Customer Feedback']), Response::HTTP_NOT_FOUND);

        return view('admin.pages.customer-feedback.detail', compact('data'));
    }
}
