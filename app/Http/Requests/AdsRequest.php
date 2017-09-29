<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'city_id'     => 'required',
            'type_id'     => 'required',
            'title'       => 'required|max:50',
            'text'        => 'required',
            'category_id' => 'required',
            'phone'       => 'required|numeric',
            'price'       => 'required|numeric',
            'terms'       => 'required',
            'files' => 'required',// |mimes:jpeg,png,jpg|max:2048
        ];
    }
}
