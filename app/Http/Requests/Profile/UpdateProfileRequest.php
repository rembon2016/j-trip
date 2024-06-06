<?php

namespace App\Http\Requests\Profile;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(auth()->id(), 'id')
            ],
            'phone' => 'nullable|numeric',
            'password' => 'nullable|string|min:8|confirmed',
            'address' => 'nullable|string',
            'image' => 'nullable|image'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nama Lengkap',
            'email' => 'Email',
            'phone' => 'Nomor HP',
            'password' => 'Password',
            'address' => 'Alamat',
            'image' => 'Foto Profil',
        ];
    }
}
