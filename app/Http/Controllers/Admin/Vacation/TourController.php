<?php

namespace App\Http\Controllers\Admin\Vacation;

use App\Models\Tour;
use App\Models\TourType;
use App\Models\Destination;
use App\Models\TourGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        DB::beginTransaction();
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

            $galleries = !empty($requestDTO['galleries']) ? $requestDTO['galleries'] : [];
            unset($requestDTO['galleries']);

            $createdTour = Tour::create($requestDTO);

            foreach ($galleries as $key => $value) {
                $galleryImage = $this->uploadFile(
                    $value,
                    TourGallery::FOLDER_NAME
                );

                TourGallery::create([
                    'tour_id' => $createdTour->id,
                    'image' => $galleryImage
                ]);
            }

            DB::commit();
            return redirect()->route('admin.tour.index')->with('toastSuccess', __('crud.created', ['name' => 'Tour']));
        } catch (\Throwable $th) {
            DB::rollback();
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
        
        DB::beginTransaction();
        try {
            $data = Tour::with('galleries')->where('id', $id)->first();
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

            $galleries = !empty($requestDTO['galleries']) ? $requestDTO['galleries'] : [];
            $temp_galleries = !empty($requestDTO['temp_galleries']) ? $requestDTO['temp_galleries'] : [];

            $data->galleries()->whereNotIn('id', $temp_galleries)->delete();

            foreach ($galleries as $key => $value) {
                $galleryImage = $this->uploadFile(
                    $value,
                    TourGallery::FOLDER_NAME
                );

                if (in_array($key, $data->galleries->toArray())) {
                    TourGallery::where('id', $key)->update([
                        'image' => $galleryImage
                    ]);
                } else {
                    TourGallery::create([
                        'tour_id' => $id,
                        'image' => $galleryImage
                    ]);
                } 
            }

            unset($requestDTO['image']);
            unset($requestDTO['galleries']);
            unset($requestDTO['temp_galleries']);

            foreach($requestDTO as $key => $value) {
                $data->{$key} = $value;
            }

            $data->save();
            
            DB::commit();
            return redirect()->route('admin.tour.index')->with('toastSuccess', __('crud.updated', ['name' => 'Tour']));
        } catch (\Throwable $th) {
            DB::rollback();
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
