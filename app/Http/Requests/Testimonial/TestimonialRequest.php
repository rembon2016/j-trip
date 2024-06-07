<?php

namespace App\Http\Requests\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'person_name' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ];
    }

    public function attributes(): array
    {
        return [
            'person_name' => 'Nama Orang/Instansi',
            'message' => 'Pesan Testimoni'
        ];
    }
}
