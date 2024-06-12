<?php

namespace App\Http\Controllers\Admin\Vacation;

use App\Models\Tour;
use App\Models\TourType;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tour\StoreTourRequest;
use App\Traits\Utilities\HandleUploadedFile;
use App\Http\Requests\Tour\UpdateTourRequest;

class TourController extends Controller
{
    use HandleUploadedFile;

    public function index()
    {
        $data = Tour::with('createdBy')->orderBy('is_featured', 'DESC')->orderBy('featured_at', 'DESC')->latest()->get();
        return view('admin.pages.tour.index', compact('data'));
    }

    public function create()
    {
        $destinations = Destination::orderBy('title', 'ASC')->get();
        $types = TourType::orderBy('title', 'ASC')->get();
        
        return view('admin.pages.tour.create', compact('destinations', 'types'));
    }
    
    public function store(StoreTourRequest $request)
    {
        $requestDTO = $request->validated();
        try {
            $requestDTO['created_by'] = auth()->id();
            $requestDTO['thumbnail'] = $this->uploadFile(
                $requestDTO['image'],
                Tour::FOLDER_NAME
            );

            if (!empty($requestDTO['is_featured']) && $requestDTO['is_featured'] == 'true') {
                $requestDTO['is_featured'] = true;
                $requestDTO['featured_at'] = now();
            } else {
                $requestDTO['is_featured'] = false;
            }

            $createdTour = Tour::create($requestDTO);
            return redirect()->route('admin.tour.index')->with('toastSuccess', __('crud.created', ['name' => 'Tour']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.tour.create')->with('toastError', __('crud.error_create', ['name' => 'Tour']))->withInput();
        }
    }
    
    public function edit(string $id)
    {
        $data = Tour::where('id', $id)->first();
        if (is_null($data)) return redirect()->route('admin.tour.index')->with('toastError', __('crud.not_found', ['name' => 'Tour']));

        $destinations = Destination::orderBy('title', 'ASC')->get();
        $types = TourType::orderBy('title', 'ASC')->get();
        
        return view('admin.pages.tour.edit', compact('data', 'destinations', 'types'));
    }
    
    public function update(UpdateTourRequest $request, string $id)
    {
        $requestDTO = $request->validated();
        
        try {
            $data = Tour::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.tour.index')->with('toastError', __('crud.not_found', ['name' => 'Tour']));

            $requestDTO['created_by'] = auth()->id();
            if (!empty($requestDTO['image'])) $requestDTO['thumbnail'] = $this->syncUploadFile(
                $requestDTO['image'],
                $data->thumbnail,
                Tour::FOLDER_NAME,
            );

            if (!empty($requestDTO['is_featured']) && $requestDTO['is_featured'] == 'true') {
                $requestDTO['is_featured'] = true;

                if (!$data->is_featured) $requestDTO['featured_at'] = now();
            } else {
                $requestDTO['is_featured'] = false;
                $requestDTO['featured_at'] = NULL;
            }

            unset($requestDTO['image']);

            foreach($requestDTO as $key => $value) {
                $data->{$key} = $value;
            }

            $data->save();
            
            return redirect()->route('admin.tour.index')->with('toastSuccess', __('crud.updated', ['name' => 'Tour']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.tour.edit', $id)->with('toastError', __('crud.error_update', ['name' => 'Tour']))->withInput();
        }
    }

    public function delete(string $id)
    {
        try {
            $data = Tour::where('id', $id)->first();
            if (is_null($data)) return redirect()->route('admin.tour.index')->with('toastError', __('crud.not_found', ['name' => 'Tour']));
            
            $data->delete();
            return redirect()->route('admin.tour.index')->with('toastSuccess', __('crud.deleted', ['name' => 'Tour']));
        } catch (\Throwable $th) {
            return redirect()->route('admin.tour.index')->with('toastError', __('crud.error_delete', ['name' => 'Tour']));
        }
    }
}
