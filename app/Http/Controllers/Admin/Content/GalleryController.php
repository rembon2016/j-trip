<?php

namespace App\Http\Controllers\Admin\Content;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Utilities\HandleUploadedFile;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;

class GalleryController extends Controller
{
    use HandleUploadedFile;

    public function index()
    {
        $data = Gallery::with('createdBy')->latest()->get();
        return view('admin.pages.gallery.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.gallery.create');
    }
    
    public function store(StoreGalleryRequest $request)
    {
        $requestDTO = $request->validated();
        try {
            $requestDTO['created_by'] = auth()->id();
            $requestDTO['image'] = $this->uploadFile(
                $requestDTO['image'],
                Gallery::FOLDER_NAME
            );

            $createdGallery = Gallery::create($requestDTO);
            return redirect()->route('admin.gallery.index')->with('toastSuccess', __('crud.created', ['name' => 'Galeri']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.gallery.create')->with('toastError', __('crud.error_create', ['name' => 'Galeri']))->withInput();
        }
    }
    
    public function edit(string $id)
    {
        $data = Gallery::where('id', $id)->first();
        if (is_null($data)) return redirect()->route('admin.gallery.index')->with('toastError', __('crud.not_found', ['name' => 'Galeri']));
        
        return view('admin.pages.gallery.edit', compact('data'));
    }
    
    public function update(UpdateGalleryRequest $request, string $id)
    {
        $requestDTO = $request->validated();
        
        try {
            $data = Gallery::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.gallery.index')->with('toastError', __('crud.not_found', ['name' => 'Galeri']));

            $requestDTO['created_by'] = auth()->id();
            if (!empty($requestDTO['image'])) $requestDTO['image'] = $this->syncUploadFile(
                $requestDTO['image'],
                $data->image,
                Gallery::FOLDER_NAME,
            );

            foreach($requestDTO as $key => $value) {
                $data->{$key} = $value;
            }

            $data->save();
            
            return redirect()->route('admin.gallery.index')->with('toastSuccess', __('crud.updated', ['name' => 'Galeri']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.gallery.edit', $id)->with('toastError', __('crud.error_update', ['name' => 'Galeri']))->withInput();
        }
    }

    public function delete(string $id)
    {
        try {
            $data = Gallery::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.gallery.index')->with('toastError', __('crud.not_found', ['name' => 'Galeri']));
            
            $data->delete();
            return redirect()->route('admin.gallery.index')->with('toastSuccess', __('crud.deleted', ['name' => 'Galeri']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.gallery.index')->with('toastSuccess', __('crud.error_delete', ['name' => 'Galeri']));
        }
    }
}
