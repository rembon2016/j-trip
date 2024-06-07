<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Users\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Traits\Utilities\HandleUploadedFile;
use App\Http\Requests\User\UpdateUserRequest;

class StaffController extends Controller
{
    use HandleUploadedFile;

    public function __construct(
        protected UserService $userService
    ) {}

    public function index()
    {
        $data = $this->userService->listUsers([
            'role' => User::STAFF_ROLE
        ]);

        return view('admin.pages.users.staff.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.users.staff.create');
    }
    
    public function store(StoreUserRequest $request)
    {
        $requestDTO = $request->validated();
        $requestDTO['role'] = User::STAFF_ROLE;
        $requestDTO['email_verified_at'] = now();
        
        $createUserResponse = $this->userService->createUser($requestDTO);
        
        return $createUserResponse->success
            ? redirect()->route('admin.users.staff.index')->with('toastSuccess', $createUserResponse->message)
            : redirect()->route('admin.users.staff.create')->with('toastError', $createUserResponse->message)->withInput();
    }
    
    public function edit(string $id)
    {
        $getUserResponse = $this->userService->findUserById($id);
        return $getUserResponse->success
            ? view('admin.pages.users.staff.edit', [
                'data' => $getUserResponse->data
            ])
            : redirect()->route('admin.users.staff.index')->with('toastError', __('crud.not_found', ['name' => 'Galeri']));
    }
    
    public function update(UpdateUserRequest $request, string $id)
    {
        $requestDTO = $request->validated();
        $updateUserResponse = $this->userService->updateUser($requestDTO, $id);
        
        return $updateUserResponse->success
            ? redirect()->route('admin.users.staff.index')->with('toastSuccess', $updateUserResponse->message)
            : redirect()->route('admin.users.staff.edit', $id)->with('toastError', $updateUserResponse->message)->withInput();
    }

    public function delete(string $id)
    {
        $deleteUserResponse = $this->userService->deleteUser($id);

        return redirect()->route('admins.users.staff.index')->with(
            $deleteUserResponse->success ? 'toastSuccess' : 'toastError',
            $deleteUserResponse->message
        );
    }
}
