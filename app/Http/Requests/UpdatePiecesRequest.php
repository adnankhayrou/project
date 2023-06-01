<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePiecesRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'price' => 'required',
            'phone' => 'required|regex:/^[\+]?(212)[6-8]{1}[0-9]{8}$/',
            'status' => 'required',
            'city_id' => 'required',
            'serial_number' => 'required',
            'reference' => 'required',
            'with' => 'required',
            'width' => 'required',
            'height' => 'required',
            'type' => 'required',
            'load_index' => 'required',
            'speed_index' => 'required',
            'brand_id' => 'required',
            'model_id' => 'required',
            'motorization_id' => 'required',
            'etat_id' => 'required',
            'active' => 'required',
            'new_price' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
            'user_id' => 'required',
        ];
    }
}
