<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date' => 'required',
            'preview_image' => 'required'
        ];
    }

    public function messages(){
        return [
            'date.required' => 'A date must be selected!',
            'preview_image' => 'A preview image is required!'
        ];
    }
}
