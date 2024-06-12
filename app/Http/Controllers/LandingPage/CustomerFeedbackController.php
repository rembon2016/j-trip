<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Http\Request;
use App\Models\CustomerFeedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerFeedback\StoreCustomerFeedbackRequest;

class CustomerFeedbackController extends Controller
{
    public function store(StoreCustomerFeedbackRequest $request)
    {
        $requestDTO = $request->validated();
        
        try {
            $requestDTO['client_ip_address'] = $request->getClientIp();
            CustomerFeedback::create($requestDTO);
            
            return redirect()->back()->with('toastSuccess', 'Pesan Berhasil Dikirim, Terima Kasih!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('toastError', 'Pesan Anda Gagal Dikirim!');
        }
    }
}
