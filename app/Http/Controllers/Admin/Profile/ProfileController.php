<?php

namespace App\Http\Controllers\Admin\Profile;

use Illuminate\Http\Request;
use App\Services\Users\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {}
    
    public function index()
    {
        return view('admin.pages.profile.index');
    }

    public function store(UpdateProfileRequest $request)
    {
        $requestDTO = $request->validated();
        $updateProfileResponse = $this->userService->updateUser($requestDTO, auth()->id());

        return $updateProfileResponse->success
            ? redirect()->route('admin.profile.index')->with('toastSuccess', 'Profil Berhasil Diubah!')
            : redirect()->route('admin.profile.index')->with('toastError', 'Profil Gagal Diubah');
    }
}
