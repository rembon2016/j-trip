<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $requestDTO = $request->validated();
        
        try {
            $user = User::where('email', $requestDTO['email'])->first();
            if (is_null($user)) return redirect(route('auth.login'))->with('toastError', 'Email Tidak Terdaftar!')->withInput();
            if (is_null($user->email_verified_at)) return redirect(route('auth.login'))->with('toastError', __('auth.not_active'))->withInput();

            if (Auth::attempt($requestDTO)) {
                request()->session()->regenerate();
                return redirect()->intended(route('admin.dashboard.index'))->with('toastSuccess', __('auth.success_login'));
            }

            return redirect()->route('auth.login')->with('toastError', __('auth.wrong_password'))->withInput();
        } catch (\Throwable $th) {
            return redirect()->route('auth.login')->with('toastError', __('auth.failed_login'))->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect()->route('auth.login')->with('toastSuccess', __('auth.logout'));
    }
}
