<?php

namespace App\Http\Controllers\Admin\Vacation;

use App\Models\TourType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Utilities\HandleUploadedFile;
use App\Http\Requests\TourType\StoreTourTypeRequest;
use App\Http\Requests\TourType\UpdateTourTypeRequest;

class TourTypeController extends Controller
{
    use HandleUploadedFile;

    public function index()
    {
        $data = TourType::with('createdBy')->latest()->get();
        return view('admin.pages.tour-type.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.tour-type.create');
    }
    
    public function store(StoreTourTypeRequest $request)
    {
        $requestDTO = $request->validated();
        try {
            $requestDTO['created_by'] = auth()->id();
            $requestDTO['image'] = $this->uploadFile(
                $requestDTO['image'],
                TourType::FOLDER_NAME
            );

            $createdTourType = TourType::create($requestDTO);
            return redirect()->route('admin.tour-type.index')->with('toastSuccess', __('crud.created', ['name' => 'Tipe Tour']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.tour-type.create')->with('toastError', __('crud.error_create', ['name' => 'Tipe Tour']))->withInput();
        }
    }
    
    public function edit(string $id)
    {
        $data = TourType::where('id', $id)->first();
        if (is_null($data)) return redirect()->route('admin.tour-type.index')->with('toastError', __('crud.not_found', ['name' => 'Tipe Tour']));
        
        return view('admin.pages.tour-type.edit', compact('data'));
    }
    
    public function update(UpdateTourTypeRequest $request, string $id)
    {
        $requestDTO = $request->validated();
        
        try {
            $data = TourType::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.tour-type.index')->with('toastError', __('crud.not_found', ['name' => 'Tipe Tour']));

            $requestDTO['created_by'] = auth()->id();
            if (!empty($requestDTO['image'])) $requestDTO['image'] = $this->syncUploadFile(
                $requestDTO['image'],
                $data->image,
                TourType::FOLDER_NAME,
            );

            foreach($requestDTO as $key => $value) {
                $data->{$key} = $value;
            }

            $data->save();
            
            return redirect()->route('admin.tour-type.index')->with('toastSuccess', __('crud.updated', ['name' => 'Tipe Tour']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.tour-type.edit', $id)->with('toastError', __('crud.error_update', ['name' => 'Tipe Tour']))->withInput();
        }
    }

    public function delete(string $id)
    {
        try {
            $data = TourType::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.tour-type.index')->with('toastError', __('crud.not_found', ['name' => 'Tipe Tour']));
            
            $data->delete();
            return redirect()->route('admin.tour-type.index')->with('toastSuccess', __('crud.deleted', ['name' => 'Tipe Tour']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.tour-type.index')->with('toastSuccess', __('crud.error_delete', ['name' => 'Tipe Tour']));
        }
    }
}
