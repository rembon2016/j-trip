<?php

namespace App\Http\Controllers\Admin\Other;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Other\StoreSettingRequest;

class SettingController extends Controller
{
    public function index()
    {
        $data = Setting::first();
        if (is_null($data)) $data = Setting::create([]);

        return view('admin.pages.setting.index', compact('data'));
    }

    public function store(StoreSettingRequest $request)
    {
        $requestDTO = $request->validated();
        
        try {
            $requestDTO['updated_by'] = auth()->id();
            $requestDTO['whatsapp_number'] = "62" . $requestDTO['whatsapp_number'];
            $requestDTO['phone'] = "62" . $requestDTO['phone'];

            $data = Setting::first();
            $data->update($requestDTO);

            return redirect()->route('admin.setting.index')->with('toastSuccess', __('crud.updated', ['name' => 'Web Setting']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.setting.index')->with('toastError', __('crud.error_update', ['name' => 'Web Setting']));
        }
    }
}
