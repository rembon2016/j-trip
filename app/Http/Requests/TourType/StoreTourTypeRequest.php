<?php

namespace App\Http\Requests\TourType;

use Illuminate\Foundation\Http\FormRequest;

class StoreTourTypeRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Nama Destinasi',
            'description' => 'Deskripsi',
            'image' => 'Thumbnail Destinasi'
        ];
    }
}
