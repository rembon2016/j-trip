<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'description' => 'required|string',
            'image' => 'required|image',
            'tour_id' => 'required|exists:tours,id'
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Judul',
            'description' => 'Deskripsi',
            'image' => 'Thumbnail',
            'tour_id' => 'Fiturkan Tour'
        ];
    }
}
