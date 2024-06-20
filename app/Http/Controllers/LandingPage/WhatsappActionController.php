<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\WhatsappAction;
use App\Http\Controllers\Controller;

class WhatsappActionController extends Controller
{
    public function redirectWhatsapp()
    {
        $setting = Setting::first();
        
        WhatsappAction::create([
            'client_ip_address' => request()->getClientIp()
        ]);

        return redirect("https://wa.me/{$setting?->whatsapp_number}");
    }
}
