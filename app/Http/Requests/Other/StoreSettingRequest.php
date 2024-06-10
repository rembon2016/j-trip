<?php

namespace App\Http\Requests\Other;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
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
            'address' => 'required|string|max:500',
            'email' => 'required|email',
            'whatsapp_number' => 'required|numeric',
            'phone' => 'required|numeric',
            'instagram_url' => 'required|url:http,https',
            'linkedin_url' => 'required|url:http,https',
            'facebook_url' => 'required|url:http,https',
            'twitter_url' => 'required|url:http,https',
            'tiktok_url' => 'required|url:http,https',
        ];
    }

    public function attributes(): array
    {
        return [
            'address' => 'Alamat',
            'email' => 'Email',
            'whatsapp_number' => 'No. Whatsapp',
            'phone' => 'No. Telepon',
            'instagram_url' => 'Link Instagram',
            'facebook_url' => 'Link Facebook',
            'linkedin_url' => 'Link LinkedIn',
            'twitter_url' => 'Link Twitter / X',
            'tiktok_url' => 'Link Tiktok',
        ];
    }
}
