<?php

namespace App\Http\Controllers\Admin\Utilities;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Helpers\Responses\JsonResponse;
use App\Traits\Utilities\HandleUploadedFile;

class CkeditorController extends Controller
{
    use HandleUploadedFile;

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $folderName = 'content-media';
            $uploadedFileName = $this->uploadFile($request->file('upload'), $folderName);
            $uploadedFileURL = asset('storage/' . $folderName . "/{$uploadedFileName}");

            return response()->json([
                'fileName' => $uploadedFileName,
                'uploaded' => 1,
                'url' => $uploadedFileURL
            ], 200);
        }

        return JsonResponse::error('Invalid Request Payload', Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
