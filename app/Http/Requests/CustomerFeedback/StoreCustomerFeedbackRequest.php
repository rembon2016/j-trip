<?php

namespace App\Http\Requests\CustomerFeedback;

use App\Constants\Month;
use Illuminate\Validation\Rule;
use App\Models\CustomerFeedback;
use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerFeedbackRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email:dns',
            'phone' => 'required|numeric',
            'total_participant' => [
                'required',
                Rule::in(array_keys(CustomerFeedback::PARTICIPANTS))
            ],
            'tour_id' => 'required|exists:tours,id',
            'departure_month' => [
                'required',
                Rule::in(array_values(Month::LIST_OF_MONTHS))
            ],
            'message' => 'required|string|max:1000'
        ];
    }
}
