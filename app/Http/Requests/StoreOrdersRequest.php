<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrdersRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'piece_id' => 'required',
            'status' => 'required',
            'phone' => 'required|regex:/^[\+]?(212)[6-8]{1}[0-9]{8}$/',
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' => 'required|email',
            'address' => 'required',
            'taxe' => 'required',
            'total' => 'required',
        ];
    }
}
