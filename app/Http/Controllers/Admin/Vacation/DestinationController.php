<?php

namespace App\Http\Controllers\Admin\Vacation;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Utilities\HandleUploadedFile;
use App\Http\Requests\Destination\StoreDestinationRequest;
use App\Http\Requests\Destination\UpdateDestinationRequest;

class DestinationController extends Controller
{
    use HandleUploadedFile;

    public function index()
    {
        $data = Destination::with('createdBy')->latest()->get();
        return view('admin.pages.destination.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.destination.create');
    }
    
    public function store(StoreDestinationRequest $request)
    {
        $requestDTO = $request->validated();
        try {
            $requestDTO['created_by'] = auth()->id();
            $requestDTO['image'] = $this->uploadFile(
                $requestDTO['image'],
                Destination::FOLDER_NAME
            );

            $createdDestination = Destination::create($requestDTO);
            return redirect()->route('admin.destination.index')->with('toastSuccess', __('crud.created', ['name' => 'Destinasi/Lokasi']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.destination.create')->with('toastError', __('crud.error_create', ['name' => 'Destinasi/Lokasi']))->withInput();
        }
    }
    
    public function edit(string $id)
    {
        $data = Destination::where('id', $id)->first();
        if (is_null($data)) return redirect()->route('admin.destination.index')->with('toastError', __('crud.not_found', ['name' => 'Destinasi/Lokasi']));
        
        return view('admin.pages.destination.edit', compact('data'));
    }
    
    public function update(UpdateDestinationRequest $request, string $id)
    {
        $requestDTO = $request->validated();
        
        try {
            $data = Destination::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.destination.index')->with('toastError', __('crud.not_found', ['name' => 'Destinasi/Lokasi']));

            $requestDTO['created_by'] = auth()->id();
            if (!empty($requestDTO['image'])) $requestDTO['image'] = $this->syncUploadFile(
                $requestDTO['image'],
                $data->image,
                Destination::FOLDER_NAME,
            );

            foreach($requestDTO as $key => $value) {
                $data->{$key} = $value;
            }

            $data->save();
            
            return redirect()->route('admin.destination.index')->with('toastSuccess', __('crud.updated', ['name' => 'Destinasi/Lokasi']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.destination.edit', $id)->with('toastError', __('crud.error_update', ['name' => 'Destinasi/Lokasi']))->withInput();
        }
    }

    public function delete(string $id)
    {
        try {
            $data = Destination::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.destination.index')->with('toastError', __('crud.not_found', ['name' => 'Destinasi/Lokasi']));
            
            $data->delete();
            return redirect()->route('admin.destination.index')->with('toastSuccess', __('crud.deleted', ['name' => 'Destinasi/Lokasi']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.destination.index')->with('toastError', __('crud.error_delete', ['name' => 'Destinasi/Lokasi']));
        }
    }
}
