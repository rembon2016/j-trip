<?php

namespace App\Http\Requests\User;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'password' => 'nullable|min:8|confirmed',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->route('id'), 'id')
            ],
            'phone' => 'nullable|numeric',
            'address' => 'nullable|string|max:1000',
            'image' => 'nullable|image'
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Nama Lengkap',
            'email' => 'Email',
            'phone' => 'No. HP',
            'address' => 'Alamat',
            'image' => 'Foto Profil'
        ];
    }
}
