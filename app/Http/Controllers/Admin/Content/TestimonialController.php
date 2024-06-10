<?php

namespace App\Http\Controllers\Admin\Content;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Utilities\HandleUploadedFile;
use App\Http\Requests\Testimonial\TestimonialRequest;

class TestimonialController extends Controller
{
    use HandleUploadedFile;

    public function index()
    {
        $data = Testimonial::with('createdBy')->latest()->get();
        return view('admin.pages.testimonial.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.testimonial.create');
    }
    
    public function store(TestimonialRequest $request)
    {
        $requestDTO = $request->validated();
        try {
            $requestDTO['created_by'] = auth()->id();
            $createdTestimonial = Testimonial::create($requestDTO);

            return redirect()->route('admin.testimonial.index')->with('toastSuccess', __('crud.created', ['name' => 'Galeri']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.testimonial.create')->with('toastError', __('crud.error_create', ['name' => 'Galeri']))->withInput();
        }
    }
    
    public function edit(string $id)
    {
        $data = Testimonial::where('id', $id)->first();
        if (is_null($data)) return redirect()->route('admin.testimonial.index')->with('toastError', __('crud.not_found', ['name' => 'Galeri']));
        
        return view('admin.pages.testimonial.edit', compact('data'));
    }
    
    public function update(TestimonialRequest $request, string $id)
    {
        $requestDTO = $request->validated();
        
        try {
            $data = Testimonial::where('id', $id)->first();
            $requestDTO['created_by'] = auth()->id();
            if (is_null($data)) return redirect()->route('admin.testimonial.index')->with('toastError', __('crud.not_found', ['name' => 'Galeri']));

            foreach($requestDTO as $key => $value) {
                $data->{$key} = $value;
            }

            $data->save();
            
            return redirect()->route('admin.testimonial.index')->with('toastSuccess', __('crud.updated', ['name' => 'Galeri']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.testimonial.edit', $id)->with('toastError', __('crud.error_update', ['name' => 'Galeri']))->withInput();
        }
    }

    public function delete(string $id)
    {
        try {
            $data = Testimonial::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.testimonial.index')->with('toastError', __('crud.not_found', ['name' => 'Galeri']));
            
            $data->delete();
            return redirect()->route('admin.testimonial.index')->with('toastSuccess', __('crud.deleted', ['name' => 'Galeri']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.testimonial.index')->with('toastError', __('crud.error_delete', ['name' => 'Galeri']));
        }
    }
}
