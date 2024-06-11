<?php

namespace App\Http\Requests\Tour;

use Illuminate\Foundation\Http\FormRequest;

class StoreTourRequest extends FormRequest
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
            'destination_id' => 'required|exists:destinations,id',
            'tour_type_id' => 'required|exists:tour_types,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'total_destination' => 'required|numeric|min:0',
            'transportation' => 'required|string|max:255',
            'room_type' => 'required|string|max:255',
            'tour_guide' => 'required|string|max:255',
            'image' => 'required|image',
        ];
    }
    public function attributes(): array
    {
        return [
            'title' => 'Nama Tour',
            'destination_id' => 'Destinasi / Lokasi',
            'tour_type_id' => 'Tipe Tour',
            'description' => 'Deskripsi',
            'price' => 'Harga',
            'total_destination' => 'Jumlah Destinasi',
            'transportation' => 'Transportasi',
            'room_type' => 'Jenis Kamar',
            'tour_guide' => 'Tour Guide',
            'image' => 'Thumbnail',
        ];
    }
}
