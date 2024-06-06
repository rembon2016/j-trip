<?php

namespace App\Http\Controllers\Content;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Traits\Utilities\HandleUploadedFile;
use App\Http\Requests\Blog\UpdateBlogRequest;

class BlogController extends Controller
{
    use HandleUploadedFile;

    public function index()
    {
        $data = Blog::with('createdBy')->latest()->get();
        return view('admin.pages.blog.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.blog.create');
    }
    
    public function store(StoreBlogRequest $request)
    {
        $requestDTO = $request->validated();
        try {
            $requestDTO['created_by'] = auth()->id();
            $requestDTO['image'] = $this->uploadFile(
                $requestDTO['image'],
                Blog::FOLDER_NAME
            );

            $createdBlog = Blog::create($requestDTO);
            return redirect()->route('admin.blog.index')->with('toastSuccess', __('crud.created', ['name' => 'Blog']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.blog.create')->with('toastError', __('crud.error_create', ['name' => 'Blog']))->withInput();
        }
    }
    
    public function edit(string $id)
    {
        $data = Blog::where('id', $id)->first();
        if (is_null($data)) return redirect()->route('admin.blog.index')->with('toastError', __('crud.not_found', ['name' => 'Blog']));
        
        return view('admin.pages.blog.edit', compact('data'));
    }
    
    public function update(UpdateBlogRequest $request, string $id)
    {
        $requestDTO = $request->validated();
        
        try {
            $data = Blog::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.blog.index')->with('toastError', __('crud.not_found', ['name' => 'Blog']));

            $requestDTO['created_by'] = auth()->id();
            if (!empty($requestDTO['image'])) $requestDTO['image'] = $this->syncUploadFile(
                $requestDTO['image'],
                $data->image,
                Blog::FOLDER_NAME,
            );

            foreach($requestDTO as $key => $value) {
                $data->{$key} = $value;
            }

            $data->save();
            
            return redirect()->route('admin.blog.index')->with('toastSuccess', __('crud.updated', ['name' => 'Blog']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.blog.edit', $id)->with('toastError', __('crud.error_update', ['name' => 'Blog']))->withInput();
        }
    }

    public function delete(string $id)
    {
        try {
            $data = Blog::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.blog.index')->with('toastError', __('crud.not_found', ['name' => 'Blog']));
            
            $data->delete();
            return redirect()->route('admin.blog.index')->with('toastSuccess', __('crud.deleted', ['name' => 'Blog']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.blog.index')->with('toastSuccess', __('crud.error_delete', ['name' => 'Blog']));
        }
    }
}
