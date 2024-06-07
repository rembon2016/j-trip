<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Users\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Traits\Utilities\HandleUploadedFile;
use App\Http\Requests\User\UpdateUserRequest;

class AdministratorController extends Controller
{
    use HandleUploadedFile;

    public function __construct(
        protected UserService $userService
    ) {}

    public function index()
    {
        $data = $this->userService->listUsers([
            'role' => User::ADMIN_ROLE
        ]);

        return view('admin.pages.users.administrator.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.users.administrator.create');
    }
    
    public function store(StoreUserRequest $request)
    {
        $requestDTO = $request->validated();
        $requestDTO['role'] = User::ADMIN_ROLE;
        $requestDTO['email_verified_at'] = now();
        
        $createUserResponse = $this->userService->createUser($requestDTO);
        
        return $createUserResponse->success
            ? redirect()->route('admin.users.administrator.index')->with('toastSuccess', $createUserResponse->message)
            : redirect()->route('admin.users.administrator.create')->with('toastError', $createUserResponse->message)->withInput();
    }
    
    public function edit(string $id)
    {
        $getUserResponse = $this->userService->findUserById($id);
        return $getUserResponse->success
            ? view('admin.pages.users.administrator.edit', [
                'data' => $getUserResponse->data
            ])
            : redirect()->route('admin.users.administrator.index')->with('toastError', __('crud.not_found', ['name' => 'Galeri']));
    }
    
    public function update(UpdateUserRequest $request, string $id)
    {
        $requestDTO = $request->validated();
        $updateUserResponse = $this->userService->updateUser($requestDTO, $id);
        
        return $updateUserResponse->success
            ? redirect()->route('admin.users.administrator.index')->with('toastSuccess', $updateUserResponse->message)
            : redirect()->route('admin.users.administrator.edit', $id)->with('toastError', $updateUserResponse->message)->withInput();
    }

    public function delete(string $id)
    {
        $deleteUserResponse = $this->userService->deleteUser($id);

        return redirect()->route('admins.users.administrator.index')->with(
            $deleteUserResponse->success ? 'toastSuccess' : 'toastError',
            $deleteUserResponse->message
        );
    }
}
